@extends('layouts.app')

@section('content')
<div class="container">
 @include('layouts.message')
 <div class="row justify-content-center">
  <div class="col-sm-12">
   <div class="card">
    <div class="card-header">
     {{__('Update Certificate Template')}}
   </div>
   <div class="card-body">
     <form action="{{route('admin.certificate.update')}}" method="POST" enctype="multipart/form-data">
      @csrf
      <input type="file" name="certificate_template">
      <hr>
      <div class="form-group row">
        <label class="col-4">{{__("Use Cloudinary Transformation")}}</label> 
        <div class="col-8">
          <div class="custom-control custom-checkbox custom-control-inline">
            <input name="cloudinary_transform" id="cloudinary_transform_0" type="checkbox" class="custom-control-input" value="1" aria-describedby="cloudinary_transformHelpBlock" {{!empty($certificate) ? ($certificate->cloudinary_transform == 1 ? 'checked="selected"':""):''}}> 
            <label for="cloudinary_transform_0" class="custom-control-label">{{__("Cloudinary")}}</label>
          </div> 
          <span id="cloudinary_transformHelpBlock" class="form-text text-muted">{{__("This will have effects on your account.")}}</span>
        </div>
      </div>
<hr>
      <button class="btn btn-success" type="submit">{{__("Update")}}</button>
    </form>
  </div>
  <div class="card-footer">
   <a class="btn btn-primary" href="{{url()->previous()}}">{{__("Back")}}</a>
   <a class="btn btn-primary" target="_blank" href="{{route('admin.certificate.preview')}}">{{__("Preveiw Current Certificate")}}</a>
 </div>

</div>
</div>
</div>
</div>
@endsection