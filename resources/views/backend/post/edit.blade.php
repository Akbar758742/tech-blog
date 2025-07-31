@extends('backend.master')
@section('mainContent')
    <div class="container-fluid dashboard-content ">
        <!-- basic form  -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="section-block" id="basicform">
                    <h3 class="section-title">Basic Form Elements</h3>
                    <p>Use custom button styles for actions in forms, dialogs, and more with support for multiple sizes,
                        states, and more.</p>
                </div>
                @if (Session::has('success'))
                    {{ Session::get('success') }}
                @elseif(Session::has('danger'))
                    {{ Session::get('danger') }} <!-- here to 'withWarning()' -->
                @endif
                <div class="card">

                    <h5 class="card-header">add new</h5>
                    <div class="card-body">
                        <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">

                                <!-- Title -->
                                <div class="form-group col-6">
                                    <label for="title" class="col-form-label">Title</label>
                                    <input id="title" value="{{ $post->title }}" name="title" type="text"
                                        class="form-control @error('title') is-invalid @enderror">
                                    @error('title')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Description -->
                                <div class="form-group col-6">
                                    <label for="description" class="col-form-label"> Description</label>
                                    <textarea id="description" name="description" class="form-control @error('description') is-invalid @enderror">{{ $post->description }}</textarea>
                                    @error('description')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Editor Content -->
                                <div class="form-group col-12">
                                    <label for="editor_content" class="col-form-label">editor Content</label>
                                    <textarea id="editor_content" name="editor_content" class="form-control @error('editor_content') is-invalid @enderror">{{ $post->editor_content }}</textarea>
                                    @error('editor_content')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Category -->
                                <div class="form-group col-6">
                                    <label for="category" class="col-form-label">Category</label>
                                    <select name="category_id" id="category"
                                        class="form-control @error('category_id') is-invalid @enderror">
                                        <option value="">Select Category</option>
                                         @if(isset($categories))
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}" {{ $post->category_id==$category->id? 'selected':'' }} >
                                                {{ $category->title }}
                                            </option>
                                        @endforeach
                                        @endif
                                    </select>
                                    @error('category_id')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Subcategory -->
                                <div class="form-group col-6">
                                    <label for="sub_category" class="col-form-label">Subcategory</label>
                                    <select name="sub_category_id" id="sub_category"
                                        class="form-control @error('sub_category_id') is-invalid @enderror">
                                        <option value="{{ $post->sub_category_id }}"></option>
                                         @if(isset($subcategories))
                                            @foreach ($subcategories as $subcat)
                                                <option value="{{ $subcat->id }}" {{ $post->sub_category_id == $subcat->id ? 'selected' : '' }}>{{ $subcat->title }}</option>
                                            @endforeach
                                        @endif
                                        {{-- You can fill this dynamically using JS based on category --}}
                                    </select>
                                    @error('sub_category_id')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Status -->
                                <div class="form-group col-6">
                                    <label for="status" class="col-form-label">Status</label>
                                    <select name="status" id="status"
                                        class="form-control @error('status') is-invalid @enderror">
                                        <option value="1">Active</option>
                                        <option value="0">Inactive</option>
                                    </select>
                                    @error('status')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Order -->
                                <div class="form-group col-6">
                                    <label for="order" class="col-form-label">Order</label>
                                    <input id="order" name="order" value="{{ $post->order }}" type="number"
                                        class="form-control @error('order') is-invalid @enderror">
                                    @error('order')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Image -->
                                <div class="form-group col-6">
                                    <label for="image" class="col-form-label">Image</label>
                                    <input id="image" name="image[]" multiple type="file"
                                        class="form-control @error('image') is-invalid @enderror">
                                    @error('image')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Submit Button -->
                                <div class="form-group col-12 text-right">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>

                            </div>
                        </form>

                    </div>

                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end basic form  -->
    </div>
@endsection

@push('body-scripts')
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });


        $(document).ready(function() {
            $("#category").on("change", function() {

                var category_id = ($("#category").val());

                $.ajax({
                    data: {
                        category_id: category_id
                    },
                    
                    url: "{{ route('get-subcategory') }}",
                    type: "POST",
                    dataType: 'json',
                    success: function(data) {
                        var html = '';
                        $.each(data.subcategories, function(index, val) {

                            html += "<option value='" + val.id + "'>" + val.title +
                                "</option>";
                        });

                        $('#sub_category').html(html);


                    },
                    error: function(data) {
                        console.log('Error:', data);
                        $('#saveBtn').html('Save Changes');
                    }
                });

            });
        });
    </script>
@endpush
