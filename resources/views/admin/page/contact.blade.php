@extends('layouts.app')

@section('content')
  <div class="container-fluid">
  	@include('layouts.message')
    <div class="row justify-content-center">
      <div class="col-sm-12">
      	<div class="card">
      		<div class="card-header">
      			{{__("Update About Page")}}
      		</div>
      		<div class="card-body">
      			<form action="{{route('admin.page.update','contact')}}" method="POST">
              @csrf
              @include('admin.page.carousel')
              <hr>

              <div class="form-group row">
                  <label for="contact_us_description" class="col-md-4 col-form-label text-md-right">{{ __('Contact Us Description') }}</label>
                  <div class="col-md-6">
                      <textarea name="contact_us_description" class="form-control" id="contact_us_description" rows="5" cols="5">{{ old('contact_us_description') ?? (optional($data)->parts['contact_us_description'] ?? '')}}</textarea>
              
                      @error('contact_us_description')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
              </div>
              @include('admin.page.seo')              
              <button type="submit" class="btn btn-success">{{__("Save")}}</button>
            </form>
      		</div>
      		<div class="card-footer">
      			<a class="btn btn-primary" href="{{url()->previous()}}">{{__("Back")}}</a>
      		</div>
      		
      	</div>
      </div>
  </div>
</div>
@endsection
@section('scripts')
<script src="https://cdn.ckeditor.com/ckeditor5/25.0.0/classic/ckeditor.js"></script>
<script>
        ClassicEditor
            .create( document.querySelector( '#contact_us_description' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
@endsection