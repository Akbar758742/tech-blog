<?php

namespace App\Http\Controllers\Backend;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\category\StorePostRequest;
use App\Http\Requests\category\UpdateStorePostRequest;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::orderbydesc('id')->paginate(5);
        return view('backend.category.index', compact('categories'));
    }

    public function create()
    {
        return view('backend.category.create');
    }

    public function store(StorePostRequest $request)
    {
        
        $category = new Category();
        $category->title = request('title');
        $category->status = request('status');
        $category->order = request('order');
        if ($category->save()) {
            return redirect(route('category'))->with('success', 'Category added successfully');
        }
        return redirect()->back()->with('danger', 'Category not added');

        //
    }
    public function edit($id)
    {
        $category = Category::find($id);
        return view('backend.category.edit', compact('category'));
    }
    //jjj
    public function update(UpdateStorePostRequest $request, $id)
    {  
         
        $category = Category::find($id);
        $category->title = $request->title;
        $category->status = $request->status;
        $category->order = $request->order;
        if ($category->save()) {
            return redirect(route('category'))->with('success', 'Category updated successfully');
        }
        return redirect()->back()->with('danger', 'Category not updated');
    }

    public function destroy($id)
    {  
        // $category = Category::find($id);
        // if (!$category) {
        //     return redirect()->back()->with('danger', 'Category not found');
        // }
        // // Check if the category has sub-categories
        // if ($category->subCategories()->count() > 0) {
        //     return redirect()->back()->with('danger', 'Category cannot be deleted because it has sub-categories');
        // }
        $category = Category::destroy($id);
        if ($category) {
            return redirect(route('category'))->with('success', 'Category deleted successfully');
        }
        return redirect()->back()->with('danger', 'Category not deleted');
    }
}
