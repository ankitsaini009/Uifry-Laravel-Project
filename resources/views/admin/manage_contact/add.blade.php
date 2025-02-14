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
                <h2>Manage Contact Page</h2><br>
                <form action="{{ route('Manage_contact.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="Manage_contact_id" value="{{ isset($jsonData2) ? $jsonData2->id : '' }}">
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label for="hero_section_title" class="form-label">Hero Section Title</label>
                            <input type="text" class="form-control" name="hero_section_title" placeholder="Enter Hero Section Title" value="{{ old('hero_section_title', isset($PagesContantManage) ? $PagesContantManage['hero_section']['hero_section_title'] : '') }}">
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="hero_section_description" class="form-label">Hero Section Description</label>
                            <textarea class="form-control" name="hero_section_description" placeholder="Enter Hero Section Description">{{ old('hero_section_description', isset($PagesContantManage) ? $PagesContantManage['hero_section']['description'] : '') }}</textarea>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="home_section_office_timings" class="form-label">Office Timings</label>
                            <input type="text" class="form-control" name="home_section_office_timings" placeholder="Enter Office Timings" value="{{ old('home_section_office_timings', isset($PagesContantManage) ? $PagesContantManage['home_section']['home_section_office_timings']: '') }}">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="home_section_email_subscribe_description" class="form-label">Emai Address</label>
                            <textarea class="form-control" name="emai_address" placeholder="Enter Email Address">{{ old('emai_address', isset($PagesContantManage) ? $PagesContantManage['home_section']['emai_address']: '') }}</textarea>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="home_section_phone_number" class="form-label">Phone Number</label>
                            <input type="number" class="form-control" name="home_section_phone_number" placeholder="Enter Video Section Title" value="{{ old('home_section_phone_number', isset($PagesContantManage) ? $PagesContantManage['home_section']['home_section_phone_number']: '') }}">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="home_section_faq_title" class="form-label">FAQ Tite</label>
                            <input type="text" class="form-control" name="home_section_faq_title" placeholder="Enter Video Section Title" value="{{ old('home_section_faq_title', isset($PagesContantManage) ? $PagesContantManage['home_section']['home_section_faq_title']: '') }}">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="home_section_faq_description" class="form-label">FAQ Description</label>
                            <textarea type="text" class="form-control" name="home_section_faq_description" placeholder="Enter Video Section Title">{{ old('home_section_faq_description', isset($PagesContantManage) ? $PagesContantManage['home_section']['home_section_faq_description']: '') }}</textarea>
                        </div>

                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-danger">Update</button>
                        <a href="{{ route('admin.dashboard') }}" class="btn btn-secondary">Back Dashboard</a>
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
    CKEDITOR.replace('home_section_smile_content');
    CKEDITOR.replace('home_section_dental_treatments_contant');
</script>
@endsection