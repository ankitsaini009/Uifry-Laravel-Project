@extends('admin.layout.main')

@section('manage_content')
<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h2>Create Blog</h2><br>
                <form action="{{ route('blogs.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="blog_id" value="{{(isset($Blog)?$Blog->id:'')}}">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control" name="title" placeholder="Enter Title" value="{{(isset($Blog)?$Blog->title:old('title'))}}" autocomplete="off">
                            @if ($errors->has('title'))
                            <div class="text-danger">{{ $errors->first('title') }}</div>
                            @endif
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="blog_cat" class="form-label">Blog Category</label>
                            <select class="form-control" name="blog_cat" id="blog_cat_select" onchange="toggleCustomCategoryInput()">
                                <option value="">Select Category</option>
                                @foreach($blogCategories as $category)
                                <option value="{{ $category->cat_name }}"
                                    {{ (isset($Blog) && $Blog->blog_cat == $category->cat_name) ? 'selected' : '' }}>
                                    {{ $category->cat_name }}
                                </option>
                                @endforeach
                            </select>
                            @if ($errors->has('blog_cat'))
                            <div class="text-danger">{{ $errors->first('blog_cat') }}</div>
                            @endif
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="auther" class="form-label">Author Name</label>
                            <input type="text" class="form-control" name="auther" placeholder="Enter Author" value="{{(isset($Blog)?$Blog->auther:old('auther'))}}" autocomplete="off">
                            @if ($errors->has('auther'))
                            <div class="text-danger">{{ $errors->first('auther') }}</div>
                            @endif
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="image" class="form-label">Blog Image</label>
                            @if(isset($Blog) && $Blog->image)
                            <div class="mb-2">
                                <img src="{{ asset('images/' . $Blog->image) }}" alt="User Image" class="img-thumbnail" width="100">
                            </div>
                            <input type="hidden" value="{{(isset($Blog)?$Blog->image:old('image'))}}" class="form-control" name="image" autocomplete="off">
                            @endif
                            <input type="file" class="form-control" name="image" autocomplete="off">
                            @if ($errors->has('image'))
                            <div class="text-danger">{{ $errors->first('image') }}</div>
                            @endif
                        </div>


                        <div class="col-md-6 mb-3">
                            <label for="status" class="form-label">Status</label>
                            <select name="status" class="form-control">
                                <option value="active" {{ (isset($Blog) && $Blog->status == 'active') ? 'selected' : (old('status') == 'active' ? 'selected' : '') }}>Active</option>
                                <option value="inactive" {{ (isset($Blog) && $Blog->status == 'inactive') ? 'selected' : (old('status') == 'inactive' ? 'selected' : '') }}>Inactive</option>
                            </select>
                            @if ($errors->has('status'))
                            <div class="text-danger">{{ $errors->first('status') }}</div>
                            @endif
                        </div>

                        <div class="col-md-12 mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea name="description" placeholder="Enter Description" id="description" class="form-control">{{ (isset($Blog) ? $Blog->description : old('description')) }}</textarea>
                            @if ($errors->has('description'))
                            <div class="text-danger">{{ $errors->first('description') }}</div>
                            @endif
                        </div>
                    </div>
                    <br><br>
                    <div class="text-center">
                        <button type="submit" class="btn btn-danger">{{(isset($Blog)? "Update" : "Create")}}</button>
                        <a href="{{ route('blogs.index') }}" class="btn btn-secondary">Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('description');
</script>
@endsection