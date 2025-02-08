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
                            <label for="fname" class="form-label">First Name</label>
                            <input type="text" class="form-control" name="fname" placeholder="Enter First Name" value="{{(isset($Contact)?$Contact->fname:old('fname'))}}" autocomplete="off">
                            @if ($errors->has('fname'))
                            <div class="text-danger">{{ $errors->first('fname') }}</div>
                            @endif
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="lname" class="form-label">Last Name</label>
                            <input type="text" class="form-control" name="lname" placeholder="Enter First Name" value="{{(isset($Contact)?$Contact->lname:old('lname'))}}" autocomplete="off">
                            @if ($errors->has('lname'))
                            <div class="text-danger">{{ $errors->first('lname') }}</div>
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

                        <div class="col-md-12 mb-3">
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