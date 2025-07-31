<?php

namespace App\Http\Controllers\Backend;


use App\Models\Order;
use Illuminate\Http\Request;
use App\Models\Backend\Upload;
use App\Models\Backend\post;
use App\Models\Backend\Category;
use Illuminate\Support\Facades\DB;
use App\Models\Backend\SubCategory;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index()
    {

        $posts = post::orderbydesc('id')->with('images')->paginate(5);
        return view('backend.post.index', compact('posts'));
    }

    public function create()
    {
        $categories = Category::orderbydesc('id')->where('status', '1')->get();
        return view('backend.post.create', compact('categories'));
    }

public function store(Request $request)
{  
    $request->validate([
        'title' => 'required|unique:posts,title',
        'description' => 'required',
        'editor_content' => 'nullable',
        'category_id' => 'required|exists:categories,id',
        'sub_category_id' => 'required|exists:sub_categories,id',
        'status' => 'required',
        'order' => 'nullable|numeric',
        'image' => 'nullable|max:2048',

    ]);

    DB::beginTransaction();

    try {
        $post = new Post();
       
        $post->title = $request->title;
        $post->description = $request->description;
        $post->editor_content = $request->editor_content;
        $post->user_id = Auth::id(); // get the logged-in user
        $post->category_id = $request->category_id;
        $post->sub_category_id = $request->sub_category_id;
        $post->status = $request->status;
        $post->order = $request->order ?? 0;
         $post->save();

        // Handle Image
        $images = $request->file('image');
            $arr = [];
        if ($request->hasFile('image')) {
            
            foreach ($images as $item) {
                $var = date_create();
                $time = date_format($var, 'YmdHis');
                $imageName = $time . '-' . $item->getClientOriginalName();
                $item->move(public_path() . '/uploads/file/', $imageName);
                $arr[] = $imageName;

                // Save upload record
                $upload = new Upload();
                $upload->file_path = '/uploads/file/' . $imageName;
               
                 $upload->post_id = $post->id; 
                
              
                $upload->save();
            }
        }

       

        DB::commit();
        return redirect()->route('post')->with('success', 'Post added successfully');
    } catch (\Exception $e) {
        DB::rollBack();
        return redirect()->back()->with('danger', 'Post not added: ' . $e->getMessage());
    }
}
    public function edit($id)
    {
        $post = post::find($id);
        $categories = Category::all();
        $subcategories = SubCategory::orderbydesc('id')->where('status', '1')->get();

        return view('backend.post.edit', compact('post', 'categories', 'subcategories'));
    }
    public function update(Request $request, $id)
    {
         $request->validate([
        'title' => 'required|unique:posts,title',
        'description' => 'required',
        'editor_content' => 'nullable',
        'category_id' => 'required|exists:categories,id',
        'sub_category_id' => 'required|exists:sub_categories,id',
        'status' => 'required',
        'order' => 'nullable|numeric',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
    ]);
        DB::beginTransaction();

        try {
                  $post = new Post();
       
        $post->title = $request->title;
        $post->description = $request->description;
        $post->editor_content = $request->editor_content;
        $post->user_id = Auth::id(); // get the logged-in user
        $post->category_id = $request->category_id;
        $post->sub_category_id = $request->sub_category_id;
        $post->status = $request->status;
        $post->order = $request->order ?? 0;
         $post->save();

            $images = $request->file('image');
            $arr = [];


            if ($request->hasFile('image')) {
                foreach ($post->images as $item) {
                    $upload = Upload::find($item->id);
                    $filePath = public_path($upload->file_path);
                    if (file_exists($filePath)) {
                        unlink($filePath);
                    }
                    $upload->delete();
                }

                foreach ($images as $item) {
                    $var = date_create();
                    $time = date_format($var, 'YmdHis');
                    $imageName = $time . '-' . $item->getClientOriginalName();
                    $item->move(public_path() . '/uploads/file/', $imageName);
                    $arr[] = $imageName;

                    $upload = new Upload();


                    $upload->file_path = '/uploads/file/' . $imageName;
                    $upload->post_id = $post->id; // Associate with the post
                    // $upload->type = 'post'; // Specify the type if needed
                    $upload->save();
                }
            }


            $category = new Category();
            $category->name = request('name');
            $category->status = request('status');
            $category->order = request('order');

            DB::commit();

            return redirect(route('post'))->with('success', 'post update successfully');
        } catch (\Exception $e) {
            // dd($e);


            DB::rollback();

            return redirect()->back()->with('danger', 'post not updated');
        }
    }

    public function destroy($id)
    {
        $post = post::find($id);

        if ($post) {
            foreach ($post->images as $item) {
                $upload = Upload::find($item->id);
                $filePath = public_path($upload->file_path);
                if (file_exists($filePath)) {
                    unlink($filePath);
                }
            }
            $post->delete();
            return redirect(route('post'))->with('success', 'post deleted successfully');
        }
        return redirect()->back()->with('danger', 'post not deleted');
    }

    public function getSubCategory(Request $request)
    {
        $subcategories = SubCategory::where('category_id', $request->category_id)->get();
        return response()->json(['subcategories' => $subcategories]);
    }

   
}
