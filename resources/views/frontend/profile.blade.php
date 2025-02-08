@extends('frontend.layout.main')
@section('manage_front')
<div class="container">
    <div class="content-body">
        <div class="container-fluid">
            <h2>Your Profile</h2>
            <br>

            <div class="row">
                <div class="col-12">
                    <div class="profile card card-body px-3 pt-3 pb-0">
                        <div class="profile-head">
                            <div class="profile-info d-flex">
                                <div class="profile-photo me-3">
                                    <img src="{{ asset('images/' . (isset($userdata->image) ? $userdata->image : '1727852246.webp')) }}" class="img-fluid rounded-circle" alt="Profile Image" width="100">
                                </div>
                                <div>
                                    <h4 class="text-primary mb-0">{{ isset($userdata->name) ? $userdata->name : 'User Name' }}</h4>
                                    <h5 class="text-muted">{{ isset($userdata->email) ? $userdata->email : 'Email not available' }}</h5>
                                </div>
                            </div>
                        </div>
                    </div>

                    <form action="{{ route('frontuserstore') }}" method="POST" enctype="multipart/form-data" class="mt-4">
                        @csrf
                        <input type="hidden" name="user_id" value="{{ isset($userdata) ? $userdata->id : '' }}">

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" name="name" placeholder="Enter User Name" value="{{ isset($userdata) ? $userdata->name : old('name') }}" autocomplete="off">
                                @error('name')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="phone" class="form-label">Phone Number</label>
                                <input type="text" class="form-control" name="phone" placeholder="Enter User Name" value="{{ isset($userdata) ? $userdata->phone : old('name') }}" autocomplete="off">
                                @error('phone')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" name="email" placeholder="Enter Email" value="{{ isset($userdata) ? $userdata->email : old('email') }}" autocomplete="off">
                                @error('email')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="image" class="form-label">Profile Image</label>
                                @if(isset($userdata) && $userdata->image)
                                <div class="mb-2">
                                    <img src="{{ asset('images/' . $userdata->image) }}" alt="User Image" class="img-thumbnail" width="100">
                                </div>
                                @endif
                                <input type="file" class="form-control" name="image" autocomplete="off">
                                @error('image')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="text-center mt-4">
                            <button type="submit" class="btn btn-primary">Update Profile</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
@endsection