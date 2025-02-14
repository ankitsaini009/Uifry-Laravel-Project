@extends('admin.layout.main')

@section('manage_content')
<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h2>Create Specialist</h2><br>
                <form action="{{ route('specialists.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="Specialist_id" value="{{(isset($Specialist)?$Specialist->id:'')}}">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Enter Name" value="{{(isset($Specialist)?$Specialist->name:old('name'))}}" autocomplete="off">
                            @if ($errors->has('name'))
                            <div class="text-danger">{{ $errors->first('name') }}</div>
                            @endif
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="specialization" class="form-label">Specialization</label>
                            <input type="text" class="form-control" name="specialization" placeholder="Enter Specialization" value="{{(isset($Specialist)?$Specialist->specialization:old('specialization'))}}" autocomplete="off">
                            @if ($errors->has('specialization'))
                            <div class="text-danger">{{ $errors->first('specialization') }}</div>
                            @endif
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="experience" class="form-label">Experience</label>
                            <input type="text" class="form-control" name="experience" placeholder="Enter Experience" value="{{(isset($Specialist)?$Specialist->experience:old('experience'))}}" autocomplete="off">
                            @if ($errors->has('experience'))
                            <div class="text-danger">{{ $errors->first('experience') }}</div>
                            @endif
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="linkdin_profile_link" class="form-label">Linkdin Profile Link</label>
                            <input type="text" class="form-control" name="linkdin_profile_link" placeholder="Enter Linkdin Profile Link" value="{{(isset($Specialist)?$Specialist->linkdin_profile_link:old('linkdin_profile_link'))}}" autocomplete="off">
                            @if ($errors->has('linkdin_profile_link'))
                            <div class="text-danger">{{ $errors->first('linkdin_profile_link') }}</div>
                            @endif
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" placeholder="Enter email" value="{{(isset($Specialist)?$Specialist->email:old('email'))}}" autocomplete="off">
                            @if ($errors->has('email'))
                            <div class="text-danger">{{ $errors->first('email') }}</div>
                            @endif
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="contact_number" class="form-label">Contact Number</label>
                            <input type="text" class="form-control" name="contact_number" placeholder="Enter Contact Number" value="{{(isset($Specialist)?$Specialist->contact_number:old('contact_number'))}}" autocomplete="off">
                            @if ($errors->has('contact_number'))
                            <div class="text-danger">{{ $errors->first('contact_number') }}</div>
                            @endif
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="image" class="form-label">Profile Image</label>
                            @if(isset($Specialist) && $Specialist->profile_photo)
                            <div class="mb-2">
                                <img src="{{ asset('images/' . $Specialist->profile_photo) }}" alt="User Image" class="img-thumbnail" width="100">
                            </div>
                            <input type="hidden" value="{{(isset($Specialist)?$Specialist->profile_photo:old('image'))}}" class="form-control" name="image" autocomplete="off">
                            @endif
                            <input type="file" class="form-control" name="image" autocomplete="off">
                            @if ($errors->has('image'))
                            <div class="text-danger">{{ $errors->first('image') }}</div>
                            @endif
                        </div>


                        <div class="col-md-6 mb-3">
                            <label for="status" class="form-label">Status</label>
                            <select name="status" class="form-control">
                                <option value="active" {{ (isset($Specialist) && $Specialist->status == 'active') ? 'selected' : (old('status') == 'active' ? 'selected' : '') }}>Active</option>
                                <option value="inactive" {{ (isset($Specialist) && $Specialist->status == 'inactive') ? 'selected' : (old('status') == 'inactive' ? 'selected' : '') }}>Inactive</option>
                            </select>
                            @if ($errors->has('status'))
                            <div class="text-danger">{{ $errors->first('status') }}</div>
                            @endif
                        </div>

                        <div class="col-md-12 mb-3">
                            <label for="description" class="form-label">About Specialist</label>
                            <textarea name="description" placeholder="Enter Description" id="description" class="form-control">{{ (isset($Specialist) ? $Specialist->description : old('description')) }}</textarea>
                            @if ($errors->has('description'))
                            <div class="text-danger">{{ $errors->first('description') }}</div>
                            @endif
                        </div>
                    </div>
                    <br><br>
                    <div class="text-center">
                        <button type="submit" class="btn btn-danger">{{(isset($Specialist)? "Update" : "Create")}}</button>
                        <a href="{{ route('specialists.index') }}" class="btn btn-secondary">Back</a>
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