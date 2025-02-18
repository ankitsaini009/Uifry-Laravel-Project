@extends('admin.layout.main')

@section('manage_content')
<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h2>Create FAQ</h2><br>
                <form action="{{ route('faq.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="Faq_id" value="{{(isset($Faq)?$Faq->id:'')}}">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="question" class="form-label">Question</label>
                            <input type="text" class="form-control" name="question" placeholder="Enter Question" value="{{(isset($Faq)?$Faq->question:old('question'))}}" autocomplete="off">
                            @if ($errors->has('question'))
                            <div class="text-danger">{{ $errors->first('question') }}</div>
                            @endif
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="status" class="form-label">Status</label>
                            <select name="status" class="form-control">
                                <option value="active" {{ (isset($Faq) && $Faq->status == 'active') ? 'selected' : (old('status') == 'active' ? 'selected' : '') }}>Active</option>
                                <option value="inactive" {{ (isset($Faq) && $Faq->status == 'inactive') ? 'selected' : (old('status') == 'inactive' ? 'selected' : '') }}>Inactive</option>
                            </select>
                            @if ($errors->has('status'))
                            <div class="text-danger">{{ $errors->first('status') }}</div>
                            @endif
                        </div>

                        <div class="col-md-12 mb-3">
                            <label for="description" class="form-label">Answer</label>
                            <textarea name="answer" placeholder="Enter Answer" id="description" class="form-control">{{ (isset($Faq) ? $Faq->answer : old('answer')) }}</textarea>
                            @if ($errors->has('answer'))
                            <div class="text-danger">{{ $errors->first('answer') }}</div>
                            @endif
                        </div>
                    </div>
                    <br><br>
                    <div class="text-center">
                        <button type="submit" class="btn btn-danger">{{(isset($Faq)? "Update" : "Create")}}</button>
                        <a href="{{ route('faq.index') }}" class="btn btn-secondary">Back</a>
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