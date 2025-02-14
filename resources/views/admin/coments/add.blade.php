@extends('admin.layout.main')

@section('manage_content')
<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h2>Update Comment</h2><br>
                <form action="{{ route('coment.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="Blogcoment_id" value="{{(isset($Blogcoment)?$Blogcoment->id:'')}}">
                    <div class="row">

                        @if($Blogcoment->services_id == null)
                        <div class="col-md-6 mb-3">
                            <label for="title" class="form-label">Blogs</label>
                            <select name="blog_id" id="blog_id" class="form-control">
                                <option value="">Select Blogs</option>
                                @foreach($Blogs as $blog)
                                <option value="{{ $blog->id }}"
                                    {{ (isset($Blogcoment) && $Blogcoment->blog_id == $blog->id) ? 'selected' : (old('blog_id') == $blog->id ? 'selected' : '') }}>
                                    {{ $blog->title }}
                                </option>
                                @endforeach
                            </select>
                            @if ($errors->has('blog_id'))
                            <div class="text-danger">{{ $errors->first('blog_id') }}</div>
                            @endif
                        </div>
                        @else
                        <div class="col-md-6 mb-3">
                            <label for="services_id" class="form-label">Services</label>
                            <select name="services_id" id="services_id" class="form-control">
                                <option value="">Select Service</option>
                                @foreach($services as $service)
                                <option value="{{ $service->id }}"
                                    {{ ($Blogcoment->services_id == $service->id) ? 'selected' : (old('services_id') == $service->id ? 'selected' : '') }}>
                                    {{ $service->name }}
                                </option>
                                @endforeach
                            </select>
                            @if ($errors->has('services_id'))
                            <div class="text-danger">{{ $errors->first('services_id') }}</div>
                            @endif
                        </div>
                        @endif

                        <div class="col-md-6 mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Enter Name" value="{{(isset($Blogcoment)?$Blogcoment->name:old('name'))}}" autocomplete="off">
                            @if ($errors->has('name'))
                            <div class="text-danger">{{ $errors->first('name') }}</div>
                            @endif
                        </div>

                        <div class="col-md-12 mb-3">
                            <label for="description" class="form-label">Comment</label>
                            <textarea name="description" placeholder="Enter Comment" id="description" class="form-control">{{ (isset($Blogcoment) ? $Blogcoment->description : old('description')) }}</textarea>
                            @if ($errors->has('description'))
                            <div class="text-danger">{{ $errors->first('description') }}</div>
                            @endif
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" placeholder="Enter Email" value="{{(isset($Blogcoment)?$Blogcoment->email:old('email'))}}" autocomplete="off">
                            @if ($errors->has('email'))
                            <div class="text-danger">{{ $errors->first('email') }}</div>
                            @endif
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="status" class="form-label">Status</label>
                            <select name="status" class="form-control">
                                <option value="active" {{ (isset($Blogcoment) && $Blogcoment->status == 'active') ? 'selected' : (old('status') == 'active' ? 'selected' : '') }}>Active</option>
                                <option value="inactive" {{ (isset($Blogcoment) && $Blogcoment->status == 'inactive') ? 'selected' : (old('status') == 'inactive' ? 'selected' : '') }}>Inactive</option>
                            </select>
                            @if ($errors->has('status'))
                            <div class="text-danger">{{ $errors->first('status') }}</div>
                            @endif
                        </div>

                    </div>
                    <br><br>
                    <div class="text-center">
                        <button type="submit" class="btn btn-danger">{{(isset($Blog)? "Update" : "Create")}}</button>
                        <a href="{{ route('coment.index') }}" class="btn btn-secondary">Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection