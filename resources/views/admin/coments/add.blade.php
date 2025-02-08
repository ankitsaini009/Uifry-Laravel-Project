@extends('admin.layout.main')

@section('manage_content')
<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h2>Create Blog Comment</h2><br>
                <form action="{{ route('coment.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="Blogcoment_id" value="{{(isset($Blogcoment)?$Blogcoment->id:'')}}">
                    <div class="row">

                        <div class="col-md-6 mb-3">
                            <label for="title" class="form-label">Users</label>
                            <select name="user_id" id="user_id" class="form-control">
                                <option value="">Select User</option>
                                @foreach($Users as $user)
                                <option value="{{ $user->name }}" {{ (isset($Blogcoment) && $Blogcoment->user_id == $user->name) ? 'selected' : (old('user_id')) }}>{{ $user->name }}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('user_id'))
                            <div class="text-danger">{{ $errors->first('user_id') }}</div>
                            @endif
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="title" class="form-label">Blogs</label>
                            <select name="blog_id" id="blog_id" class="form-control">
                                <option value="">Select Blogs</option>
                                @foreach($Blogs as $Blogs)
                                <option value="{{ $Blogs->title }}" {{ (isset($Blogcoment) && $Blogcoment->blog_id == $Blogs->title) ? 'selected' : (old('blog_id')) }}>{{ $Blogs->title }}</option>
                                @endforeach

                            </select>
                            @if ($errors->has('blog_id'))
                            <div class="text-danger">{{ $errors->first('blog_id') }}</div>
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
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Enter Name" value="{{(isset($Blogcoment)?$Blogcoment->name:old('name'))}}" autocomplete="off">
                            @if ($errors->has('name'))
                            <div class="text-danger">{{ $errors->first('name') }}</div>
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
                            <label for="website" class="form-label">Website</label>
                            <input type="text" class="form-control" name="website" value="{{(isset($Blogcoment)?$Blogcoment->email:old('website'))}}" autocomplete="off">
                            @if ($errors->has('website'))
                            <div class="text-danger">{{ $errors->first('website') }}</div>
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
                        <a href="{{ route('blogs.index') }}" class="btn btn-secondary">Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection