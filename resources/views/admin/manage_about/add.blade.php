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
                <h2>Manage About</h2><br>
                <form action="{{ route('manage_about.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="Manage_abouts_id" value="{{(isset($Manage_about)?$Manage_about->id:'')}}">
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label for="mission_statement" class="form-label">Mission Statement</label>
                            <textarea type="text" class="form-control" name="mission_statement" placeholder="Enter Mission Statement" id="site_description" autocomplete="off">{{(isset($Manage_about)?$Manage_about->mission_statement:old('mission_statement'))}}</textarea>

                            @if ($errors->has('mission_statement'))
                            <div class="text-danger">{{ $errors->first('mission_statement') }}</div>
                            @endif
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="about_image" class="form-label">About Image</label>

                            @if(isset($Manage_about) && $Manage_about->about_image)

                            <div class="mb-2">

                                <img src="{{ asset('images/' . $Manage_about->about_image) }}" alt="User Image" class="img-thumbnail" width="100">

                            </div>

                            <input type="hidden" value="{{(isset($Manage_about)?$Manage_about->about_image:old('image'))}}" class="form-control" name="about_image" autocomplete="off">

                            @endif


                            <input
                                type="file"
                                class="form-control"
                                name="about_image"
                                id="about_image"
                                accept="image/*">

                            @if ($errors->has('about_image'))
                            <div class="text-danger">{{ $errors->first('about_image') }}</div>
                            @endif
                        </div>

                        <!-- Latest Technology Title -->
                        <div class="col-md-6 mb-3">
                            <label for="latest_technology_title" class="form-label">Latest Technology Title</label>
                            <input
                                type="text"
                                class="form-control"
                                name="latest_technology_title"
                                id="latest_technology_title"
                                placeholder="Enter Latest Technology Title"
                                value="{{ old('latest_technology_title', isset($Manage_about) ? $Manage_about->latest_technology_title : '') }}">
                            @if ($errors->has('latest_technology_title'))
                            <div class="text-danger">{{ $errors->first('latest_technology_title') }}</div>
                            @endif
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="latest_technology_sub_description" class="form-label">Latest Technology Sub Description</label>
                            <textarea
                                class="form-control"
                                name="latest_technology_sub_description"
                                id="latest_technology_sub_description"
                                placeholder="Enter Latest Technology Sub Description"
                                rows="4">{{ old('latest_technology_sub_description', isset($Manage_about) ? $Manage_about->latest_technology_sub_description : '') }}</textarea>
                            @if ($errors->has('latest_technology_sub_description'))
                            <div class="text-danger">{{ $errors->first('latest_technology_sub_description') }}</div>
                            @endif
                        </div>


                        <!-- Latest Technology Image -->
                        <div class="col-md-6 mb-3">
                            <label for="latest_technology_image" class="form-label">Latest Technology Image</label>
                            @if(isset($Manage_about) && $Manage_about->latest_technology_image)

                            <div class="mb-2">

                                <img src="{{ asset('images/' . $Manage_about->latest_technology_image) }}" alt="User Image" class="img-thumbnail" width="100">

                            </div>

                            <input type="hidden" value="{{(isset($Manage_about)?$Manage_about->latest_technology_image:old('image'))}}" class="form-control" name="latest_technology_image" autocomplete="off">

                            @endif

                            <input
                                type="file"
                                class="form-control"
                                name="latest_technology_image"
                                id="latest_technology_image"
                                accept="image/*">
                            @if ($errors->has('latest_technology_image'))
                            <div class="text-danger">{{ $errors->first('latest_technology_image') }}</div>
                            @endif
                        </div>

                        <!-- Latest Technology Description -->
                        <div class="col-md-12 mb-3">
                            <label for="latest_technology_description" class="form-label">Latest Technology Description</label>
                            <textarea
                                class="form-control"
                                name="latest_technology_description"
                                id="latest_technology_description"
                                placeholder="Enter Latest Technology Description"
                                rows="4">{{ old('latest_technology_description', isset($Manage_about) ? $Manage_about->latest_technology_description : '') }}</textarea>
                            @if ($errors->has('latest_technology_description'))
                            <div class="text-danger">{{ $errors->first('latest_technology_description') }}</div>
                            @endif
                        </div>

                        <!-- About Patients Overview Title -->
                        <div class="col-md-6 mb-3">
                            <label for="about_patients_overview_title" class="form-label">About Patients Overview Title</label>
                            <input
                                type="text"
                                class="form-control"
                                name="about_patients_overview_title"
                                id="about_patients_overview_title"
                                placeholder="Enter Patients Overview Title"
                                value="{{ old('about_patients_overview_title', isset($Manage_about) ? $Manage_about->about_patients_overview_title : '') }}">
                            @if ($errors->has('about_patients_overview_title'))
                            <div class="text-danger">{{ $errors->first('about_patients_overview_title') }}</div>
                            @endif
                        </div>
                        <!-- About Patients Overview Description -->
                        <div class="col-md-6 mb-3">
                            <label for="about_patients_overview_description" class="form-label">About Patients Overview Description</label>
                            <textarea
                                class="form-control"
                                name="about_patients_overview_description"
                                id="about_patients_overview_description"
                                placeholder="Enter Patients Overview Description"
                                rows="4">{{ old('about_patients_overview_description', isset($Manage_about) ? $Manage_about->about_patients_overview_description : '') }}</textarea>
                            @if ($errors->has('about_patients_overview_description'))
                            <div class="text-danger">{{ $errors->first('about_patients_overview_description') }}</div>
                            @endif
                        </div>

                        <!-- About Patients Overview Video -->
                        <div class="col-md-12 mb-3">
                            <label for="about_patients_overview_video" class="form-label">About Patients Overview Video</label>

                            <input
                                type="text"
                                class="form-control"
                                name="about_patients_overview_video"
                                id="about_patients_overview_video"
                                accept="video/*"
                                value="{{ old('about_patients_overview_video', isset($Manage_about) ? $Manage_about->about_patients_overview_video : '') }}"
                                placeholder="Enter Patients Overview Video URL">
                            @if ($errors->has('about_patients_overview_video'))
                            <div class="text-danger">{{ $errors->first('about_patients_overview_video') }}</div>
                            @endif
                            <br>
                            @if(isset($Manage_about) && $Manage_about->about_patients_overview_video)

                            <div class="mb-2">

                                <iframe width="560" height="315" src="{{ old('about_patients_overview_video', isset($Manage_about) ? $Manage_about->about_patients_overview_video : '') }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen width="100" height="140px"></iframe>

                            </div>
                            @endif
                        </div>
                    </div>
                    <br><br>
                    <div class="text-center">
                        <button type="submit" class="btn btn-danger"> Update About</button>
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
    CKEDITOR.replace('site_description');
    CKEDITOR.replace('latest_technology_description');
</script>
@endsection