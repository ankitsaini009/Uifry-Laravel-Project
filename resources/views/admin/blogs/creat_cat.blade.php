@extends('admin.layout.main')

@section('manage_content')
<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h2>Blog Categories</h2><br>

                <!-- Blog Form -->
                <form action="{{ route('blog_cat.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <!-- Blog Category -->
                        <div class="col-md-6 mb-3">
                            <label for="blog_cat" class="form-label">Blog Category</label>
                            <input type="text" class="form-control" name="blog_cat" placeholder="Enter Blog Category"
                                value="{{ isset($Blog) ? $Blog->blog_cat : old('blog_cat') }}" autocomplete="off">
                            @if ($errors->has('blog_cat'))
                            <div class="text-danger">{{ $errors->first('blog_cat') }}</div>
                            @endif
                        </div>

                        <!-- Status -->
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
                    </div>

                    <div class="text-center mt-4">
                        <button type="submit" class="btn btn-danger">{{ isset($Blog) ? "Update" : "Create" }}</button>
                    </div>
                </form>

                <hr>

                <!-- Blog Category List -->
                <h3 class="mt-5">Blog Categories List</h3>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Blog Category</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($blogCategories as $key => $category)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $category->cat_name }}</td>
                            <td>
                                <span class="badge {{ $category->status == 'active' ? 'bg-success' : 'bg-danger' }}">
                                    {{ ucfirst($category->status) }}
                                </span>
                            </td>
                            <td>
                                <form action="{{ route('blogs.destroy.cat', $category->id) }}" method="POST" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>

<!-- Quill & CKEditor -->
<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('description');
</script>

@endsection