@extends('layouts.app')

@section('content')
  <div class="container-fluid">
  	@include('layouts.message')
    <div class="row justify-content-center">
      <div class="col-sm-12">
      	<div class="card">
      		<div class="card-header">
      			{{__("Update Home Page")}}
      		</div>
      		<div class="card-body">
      			<form action="{{route('admin.page.update','home')}}" method="POST">
              @csrf
              @include('admin.page.carousel')
              <hr>
              <h5>Homepage Details</h5>
              <div class="form-group row">
                  <label for="details" class="col-md-4 col-form-label text-md-right">{{ __('Main Title Details') }}</label>
              
                  <div class="col-md-6">
                      <input id="details" type="text" class="form-control @error('details') is-invalid @enderror" name="details" value="{{ old('details') ?? (optional($data)->parts['details'] ?? '') }}" autocomplete="details" autofocus >
              
                      @error('details')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
              </div>
              <hr>
              <h5>Who are we?</h5>
              <div class="form-group row">
                  <label for="who_are_we_img" class="col-md-4 col-form-label text-md-right">{{ __('Who are we image url ?') }}</label>
              
                  <div class="col-md-6">
                      <input id="who_are_we_img" type="text" class="form-control @error('who_are_we_img') is-invalid @enderror" name="who_are_we_img" value="{{ old('who_are_we_img') ?? (optional($data)->parts['who_are_we_img'] ?? '') }}" autocomplete="who_are_we_img" autofocus >
              
                      @error('who_are_we_img')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
              </div>
              
              <div class="form-group row">
                  <label for="who_are_we" class="col-md-4 col-form-label text-md-right">{{ __('Who are we details.') }}</label>
              
                  <div class="col-md-6">
                      <textarea name="who_are_we" id="who_are_we" class="form-control">{{old("who_are_we") ?? (optional($data)->parts['who_are_we'] ?? '')}}</textarea>
              
                      @error('who_are_we')
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
            .create( document.querySelector( '#who_are_we' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
@endsection