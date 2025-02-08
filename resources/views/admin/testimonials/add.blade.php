@extends('admin.layout.main')

@section('manage_content')
<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h2>Create Testimonial</h2><br>
                <form action="{{ route('testimonials.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="Testimonial_id" value="{{(isset($Testimonial)?$Testimonial->id:'')}}">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Enter Name" value="{{(isset($Testimonial)?$Testimonial->name:old('name'))}}" autocomplete="off">
                            @if ($errors->has('name'))
                            <div class="text-danger">{{ $errors->first('name') }}</div>
                            @endif
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="feedback" class="form-label">Feedback</label>
                            <textarea name="feedback" placeholder="Enter Feedback" id="feedback" class="form-control">{{ (isset($Testimonial) ? $Testimonial->feedback : old('feedback')) }}</textarea>
                            @if ($errors->has('feedback'))
                            <div class="text-danger">{{ $errors->first('feedback') }}</div>
                            @endif
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="status" class="form-label">Status</label>
                            <select name="status" class="form-control">
                                <option value="active" {{ (isset($Testimonial) && $Testimonial->status == 'active') ? 'selected' : (old('status') == 'active' ? 'selected' : '') }}>Active</option>
                                <option value="inactive" {{ (isset($Testimonial) && $Testimonial->status == 'inactive') ? 'selected' : (old('status') == 'inactive' ? 'selected' : '') }}>Inactive</option>
                            </select>
                            @if ($errors->has('status'))
                            <div class="text-danger">{{ $errors->first('status') }}</div>
                            @endif
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="image" class="form-label">Image</label>
                            @if(isset($Testimonial) && $Testimonial->image)
                            <div class="mb-2">
                                <img src="{{ asset('images/' . $Testimonial->image) }}" alt="User Image" class="img-thumbnail" width="100">
                            </div>
                            <input type="hidden" value="{{(isset($Testimonial)?$Testimonial->image:old('image'))}}" class="form-control" name="image" autocomplete="off">
                            @endif
                            <input type="file" class="form-control" name="image" autocomplete="off">
                            @if ($errors->has('image'))
                            <div class="text-danger">{{ $errors->first('image') }}</div>
                            @endif
                        </div>
                    </div>
                    <br><br>
                    <div class="text-center">
                        <button type="submit" class="btn btn-danger">{{(isset($Testimonial)? "Update" : "Create")}}</button>
                        <a href="{{ route('testimonials.index') }}" class="btn btn-secondary">Back</a>
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
    // CKEDITOR.replace('description');
</script>
@endsection