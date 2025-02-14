@extends('admin.layout.main')

@section('manage_content')
<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h2>Edit Appointment</h2><br>
                <form action="{{ route('appointments.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="Appointment_id" value="{{(isset($Appointment)?$Appointment->id:'')}}">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Enter First Name" value="{{(isset($Appointment)?$Appointment->name:old('name'))}}" autocomplete="off">
                            @if ($errors->has('name'))
                            <div class="text-danger">{{ $errors->first('name') }}</div>
                            @endif
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" class="form-control" name="email" placeholder="Enter Email" value="{{(isset($Appointment)?$Appointment->email:old('lname'))}}" autocomplete="off">
                            @if ($errors->has('email'))
                            <div class="text-danger">{{ $errors->first('email') }}</div>
                            @endif
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="phone" class="form-label">Phone Number</label>
                            <input type="text" class="form-control" name="phone" placeholder="Enter Phone Number" value="{{(isset($Appointment)?$Appointment->phone_number:old('lname'))}}" autocomplete="off">
                            @if ($errors->has('phone'))
                            <div class="text-danger">{{ $errors->first('phone') }}</div>
                            @endif
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="date" class="form-label">Date</label>
                            <input type="date" class="form-control" name="date" placeholder="Enter Date"
                                value="{{ isset($Appointment) ? $Appointment->date : old('date') }}"
                                autocomplete="off" min="{{ date('Y-m-d') }}">

                            @if ($errors->has('date'))
                            <div class="text-danger">{{ $errors->first('date') }}</div>
                            @endif
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="date" class="form-label">Time</label>
                            <input type="time" class="form-control" name="time" placeholder="Enter Date" value="{{(isset($Appointment)?$Appointment->time:old('time'))}}" autocomplete="off">
                            @if ($errors->has('time'))
                            <div class="text-danger">{{ $errors->first('time') }}</div>
                            @endif
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="services_id" class="form-label">Services</label>
                            <select name="services_id" id="services_id" class="form-control">
                                <option value="">Select Service</option>
                                @foreach($services as $service)
                                <option value="{{ $service->name }}"
                                    {{ ($Appointment->sevrices == $service->name) ? 'selected' : (old('services_id') == $service->name ? 'selected' : '') }}>
                                    {{ $service->name }}
                                </option>
                                @endforeach
                            </select>
                            @if ($errors->has('services_id'))
                            <div class="text-danger">{{ $errors->first('services_id') }}</div>
                            @endif
                        </div>


                        <div class="col-md-12 mb-3">
                            <label for="date" class="form-label">Massage</label>
                            <textarea type="text" class="form-control" name="massage" placeholder="Enter Massage" autocomplete="off">{{(isset($Appointment)?$Appointment->massage:old('massage'))}}</textarea>
                            @if ($errors->has('massage'))
                            <div class="text-danger">{{ $errors->first('massage') }}</div>
                            @endif
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="status" class="form-label">Status</label>
                            <select name="status" class="form-control">
                                <option value="Current Appointment" {{ (isset($Appointment) && $Appointment->status == 'Current Appointment') ? 'selected' : (old('status') == 'active' ? 'selected' : '') }}>Current Appointment</option>
                                <option value="Coming Appointment" {{ (isset($Appointment) && $Appointment->status == 'Coming Appointment') ? 'selected' : (old('status') == 'inactive' ? 'selected' : '') }}>Coming Appointment</option>
                                <option value="Completed" {{ (isset($Appointment) && $Appointment->status == 'Completed') ? 'selected' : (old('status') == 'inactive' ? 'selected' : '') }}>Completed</option>
                            </select>
                            @if ($errors->has('status'))
                            <div class="text-danger">{{ $errors->first('status') }}</div>
                            @endif
                        </div>

                    </div>
                    <br><br>
                    <div class="text-center">
                        <button type="submit" class="btn btn-danger">{{(isset($Appointment)? "Update" : "Create")}}</button>
                        <a href="{{ route('appointments.index') }}" class="btn btn-secondary">Back</a>
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