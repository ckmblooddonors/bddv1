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
      			<form action="{{route('admin.page.update','about')}}" method="POST">
              @csrf
              @include('admin.page.carousel')
              <hr>
              <div class="form-group row">
                  <label for="about_us_img" class="col-md-4 col-form-label text-md-right">{{ __('About Us Image URL') }}</label>
              
                  <div class="col-md-6">
                      <input id="about_us_img" type="text" class="form-control @error('about_us_img') is-invalid @enderror" name="about_us_img" value="{{ old('about_us_img') ?? (optional($data)->parts['about_us_img'] ?? '')}}" autocomplete="about_us_img" autofocus >
              
                      @error('about_us_img')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
              </div>

              <div class="form-group row">
                  <label for="about_us_description" class="col-md-4 col-form-label text-md-right">{{ __('About Us  Description') }}</label>
              
                  <div class="col-md-6">
                      <textarea id="about_us_description" name="about_us_description" class="form-control  @error('about_us_description') is-invalid @enderror">{{ old('about_us_description') ?? (optional($data)->parts['about_us_description'] ?? '')}}</textarea>
              
                      @error('about_us_description')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
              </div>
              @include('admin.page.seo')
              <button type="submit" class="btn btn-success">Save</button>
            </form>
      		</div>
      		<div class="card-footer">
      			<a class="btn btn-primary" href="{{url()->previous()}}">Back</a>
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
            .create( document.querySelector( '#about_us_description' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
@endsection