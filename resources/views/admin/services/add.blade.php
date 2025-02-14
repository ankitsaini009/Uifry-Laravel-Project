@extends('admin.layout.main')

@section('manage_content')
<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h2>Create Services</h2><br>
                <form action="{{ route('services.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="Service_id" value="{{(isset($Service)?$Service->id:'')}}">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Enter name" value="{{(isset($Service)?$Service->name:old('name'))}}" autocomplete="off">
                            @if ($errors->has('name'))
                            <div class="text-danger">{{ $errors->first('name') }}</div>
                            @endif
                        </div>
                        <!-- <div class="col-md-6 mb-3">
                            <label for="price" class="form-label">Price</label>
                            <input type="number" class="form-control" name="price" placeholder="Enter Price" value="{{(isset($Service)?$Service->price:old('price'))}}" autocomplete="off">
                            @if ($errors->has('price'))
                            <div class="text-danger">{{ $errors->first('price') }}</div>
                            @endif
                        </div> -->
                        <div class="col-md-6 mb-3">
                            <label for="image" class="form-label">Services Image</label>
                            @if(isset($Service) && $Service->image)
                            <div class="mb-2">
                                <img src="{{ asset('images/' . $Service->image) }}" alt="User Image" class="img-thumbnail" width="100">
                            </div>
                            <input type="hidden" value="{{(isset($Service)?$Service->image:old('image'))}}" class="form-control" name="image" autocomplete="off">
                            @endif
                            <input type="file" class="form-control" name="image" autocomplete="off">
                            @if ($errors->has('image'))
                            <div class="text-danger">{{ $errors->first('image') }}</div>
                            @endif
                        </div>


                        <div class="col-md-6 mb-3">
                            <label for="status" class="form-label">Status</label>
                            <select name="status" class="form-control">
                                <option value="active" {{ (isset($Service) && $Service->status == 'active') ? 'selected' : (old('status') == 'active' ? 'selected' : '') }}>Active</option>
                                <option value="inactive" {{ (isset($Service) && $Service->status == 'inactive') ? 'selected' : (old('status') == 'inactive' ? 'selected' : '') }}>Inactive</option>
                            </select>
                            @if ($errors->has('status'))
                            <div class="text-danger">{{ $errors->first('status') }}</div>
                            @endif
                        </div>

                        <div class="col-md-12 mb-3">
                            <label for="description" class="form-label">Services Description</label>
                            <textarea name="description" placeholder="Enter Description" id="description" class="form-control">{{ (isset($Service) ? $Service->description : old('description')) }}</textarea>
                            @if ($errors->has('description'))
                            <div class="text-danger">{{ $errors->first('description') }}</div>
                            @endif
                        </div>
                    </div>
                    <br><br>
                    <div class="text-center">
                        <button type="submit" class="btn btn-danger">{{(isset($Service)? "Update" : "Create")}}</button>
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