@extends('admin.layout.main')

@section('manage_content')
<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h2>Edit Contact</h2><br>
                <form action="{{ route('contact.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="Contact_id" value="{{(isset($Contact)?$Contact->id:'')}}">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Enter Name" value="{{(isset($Contact)?$Contact->name:old('name'))}}" autocomplete="off">
                            @if ($errors->has('name'))
                            <div class="text-danger">{{ $errors->first('name') }}</div>
                            @endif
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" class="form-control" name="email" placeholder="Enter Email" value="{{(isset($Contact)?$Contact->email:old('lname'))}}" autocomplete="off">
                            @if ($errors->has('email'))
                            <div class="text-danger">{{ $errors->first('email') }}</div>
                            @endif
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="phone" class="form-label">Phone Number</label>
                            <input type="text" class="form-control" name="phone" placeholder="Enter Phone Number" value="{{(isset($Contact)?$Contact->phone:old('lname'))}}" autocomplete="off">
                            @if ($errors->has('phone'))
                            <div class="text-danger">{{ $errors->first('phone') }}</div>
                            @endif
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="date" class="form-label">Date</label>
                            <input type="date" class="form-control" name="date" placeholder="Select Date" value="{{(isset($Contact)?$Contact->date:old('lname'))}}" autocomplete="off">
                            @if ($errors->has('date'))
                            <div class="text-danger">{{ $errors->first('date') }}</div>
                            @endif
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="date" class="form-label">Select Time</label>
                            <input type="time" class="form-control" name="time" placeholder="Select Time"
                                value="{{ isset($Contact) ? $Contact->time : old('time') }}" autocomplete="off">

                            @if ($errors->has('time'))
                            <div class="text-danger">{{ $errors->first('time') }}</div>
                            @endif
                        </div>


                        <div class="col-md-6 mb-3">
                            <label for="select-service" class="form-label">Select Services</label>
                            <select name="services" id="select-service" class="form-select">
                                <option value="">Select Services</option>
                                @foreach($ServiceServices as $Service)
                                <option value="{{$Service->name}}" {{ isset($Contact) && $Contact->services == $Service->name ? 'selected' : '' }}>
                                    {{$Service->name}}
                                </option>
                                @endforeach
                            </select>

                            @if ($errors->has('services'))
                            <div class="text-danger">{{ $errors->first('services') }}</div>
                            @endif
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="description" class="form-label">Message</label>
                            <textarea name="message" placeholder="Enter Description" id="description" class="form-control">{{ (isset($Contact) ? $Contact->message : old('description')) }}</textarea>
                            @if ($errors->has('description'))
                            <div class="text-danger">{{ $errors->first('description') }}</div>
                            @endif
                        </div>
                    </div>
                    <br><br>
                    <div class="text-center">
                        <button type="submit" class="btn btn-danger">{{(isset($Contact)? "Update" : "Create")}}</button>
                        <a href="{{ route('contact.index') }}" class="btn btn-secondary">Back</a>
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