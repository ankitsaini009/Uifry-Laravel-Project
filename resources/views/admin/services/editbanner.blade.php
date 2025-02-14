@extends('admin.layout.main')

@section('manage_content')
<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
        <div class="row">
            @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

            @if ($errors->any())
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Please fix the following errors:</strong>
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            <div class="col-12">
                <h2>Services Banner Edit</h2><br>
                <form action="{{ route('bannerEdit.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="Service_banner_id" value="{{(isset($jsonData2)?$jsonData2->id:'')}}">
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label for="banner_title" class="form-label">Services Banner Title</label>
                            <input type="text" class="form-control" name="banner_title" placeholder="Services Banner Title" value="{{ old('banner_title', isset($PagesContantManage) ? $PagesContantManage['banner_title'] : '') }}">
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="banner_description" class="form-label">Services Banner Description</label>
                            <textarea class="form-control" name="banner_description" placeholder="Services Banner Description">{{ old('banner_description', isset($PagesContantManage) ? $PagesContantManage['banner_description'] : '') }}</textarea>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="bannerImage" class="form-label">Services Banner Image</label>
                            @if(isset($PagesContantManage) && isset($PagesContantManage['bannerImage']))

                            <div class="mb-2">
                                <img src="{{ asset('uploads/' . $PagesContantManage['bannerImage']) }}" alt="User Image" class="img-thumbnail" width="100">
                            </div>

                            <input type="hidden" value="{{ old('bannerImage', isset($PagesContantManage) ? $PagesContantManage['bannerImage'] : '') }}" class="form-control" name="bannerImage" autocomplete="off">

                            @endif
                            <input type="file" class="form-control" name="bannerImage">
                        </div>
                    </div>
                    <br><br>
                    <div class="text-center">
                        <button type="submit" class="btn btn-danger">Update</button>
                        <a href="{{ route('services.index') }}" class="btn btn-secondary">Back</a>
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