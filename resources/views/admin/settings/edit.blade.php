@extends('layouts.app')

@section('content')
  <div class="container-fluid">
    @include('layouts.message')
    <div class="row justify-content-center">
      <div class="col-sm-12">
      	<div class="card">
      		<div class="card-header">
      			{{__('Update Organisation Details')}}
      		</div>
      		<div class="card-body">
			  <form action="{{route('admin.settings.store')}}" method="POST">
              @csrf
			                <!-- details -->
					<div class="form-group row">
                      <label for="details" class="col-md-4 col-form-label text-md-right">{{ __('Details') }}</label>
                  
                      <div class="col-md-8">
                        <textarea id="details" name="details" cols="20" rows="5" class="form-control" autofocus>{{ $data ? $data->details: "" }}</textarea>                  
                          @error('details')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                      </div>
                  </div>
				  <!-- Logo URL -->
				  <div class="form-group row">
                      <label for="logo" class="col-md-4 col-form-label text-md-right">{{ __('Logo URL') }}</label>
                  
                      <div class="col-md-8">
                          <input id="logo" type="text" class="form-control @error('logo') is-invalid @enderror" name="logo" value="{{ $data ? $data->logo:'' }}" autocomplete="logo" >
                  
                          @error('logo')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                      </div>
                  </div>
				  <!-- End Logo URL -->
				  <!-- Reg Number -->
				  <div class="form-group row">
                      <label for="registration_number" class="col-md-4 col-form-label text-md-right">{{ __('Registration Number') }}</label>
                  
                      <div class="col-md-8">
                          <input id="registration_number" type="text" class="form-control @error('registration_number') is-invalid @enderror" name="registration_number" value="{{ $data ? $data->registration_number:'' }}" >
                  
                          @error('registration_number')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                      </div>
                  </div>
				  <!-- End Reg Number -->
          <div class="form-group row">
                  <label for="document_hosting" class="col-md-4 col-form-label text-md-right">{{ __('Upload to ?') }}</label>

                  <div class="col-md-6">
                      <select class="form-control @error('document_hosting') is-invalid @enderror" id="document_hosting"
                      value="" name="document_hosting" >
                      <option value="1" {{$data->document_hosting == 1? 'selected':''}}>{{__("Cloudinary")}}</option>
                      <option value="0" {{$data->document_hosting == 0? 'selected':''}}>{{__("Local")}}</option>
                      </select>
                      @error('document_hosting')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>

                  
              </div>
				  <!-- Button -->
				  <button class="btn btn-success" type="submit">{{__('Update')}}</button>
				  <a class="btn btn-primary btn-sm" href="{{url()->previous()}}">{{__("Back")}}</a>
				  <!-- End Button -->
			  </form>
      		</div>
      		
      		
      	</div>
      </div>
  </div>
</div>
@endsection