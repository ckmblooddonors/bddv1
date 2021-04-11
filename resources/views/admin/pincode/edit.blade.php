@extends('layouts.app')

@section('content')
  <div class="container-fluid">
  	@include('layouts.message')
    <div class="row justify-content-center">
      <div class="col-sm-12">
      	<div class="card">
      		<div class="card-header">
      			
      		</div>
      		<div class="card-body">
      			<form action="{{route('admin.pincode.update',$data->id)}}" method="POST" >
              @csrf
              @method('put')
              <div class="form-group row">
                  <label for="pincode" class="col-md-4 col-form-label text-md-right">{{ __('Pincode') }}</label>
              
                  <div class="col-md-6">
                      <input id="pincode" type="number" class="form-control @error('pincode') is-invalid @enderror" name="pincode" value="{{ $data->pincode }}" autocomplete="pincode" autofocus >
              
                      @error('pincode')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
              </div>
              <div class="form-group row">
                  <label for="state" class="col-md-4 col-form-label text-md-right">{{ __('State') }}</label>
              
                  <div class="col-md-6">
                      <input id="state" type="text" class="form-control @error('state') is-invalid @enderror" name="state" value="{{ $data->state }}" autocomplete="state" autofocus >
              
                      @error('state')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
              </div>
              <div class="form-group row">
                  <label for="circle" class="col-md-4 col-form-label text-md-right">{{ __('Circle') }}</label>
              
                  <div class="col-md-6">
                      <input id="circle" type="text" class="form-control @error('circle') is-invalid @enderror" name="circle" value="{{ $data->circle }}" autocomplete="circle" autofocus >
              
                      @error('circle')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
              </div>
                <div class="form-group row">
                    <label for="region" class="col-md-4 col-form-label text-md-right">{{ __('Region') }}</label>
                
                    <div class="col-md-6">
                        <input id="region" type="text" class="form-control @error('region') is-invalid @enderror" name="region" value="{{ $data->region }}" autocomplete="region" autofocus >
                
                        @error('region')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="division" class="col-md-4 col-form-label text-md-right">{{ __('Division') }}</label>
                
                    <div class="col-md-6">
                        <input id="division" type="text" class="form-control @error('division') is-invalid @enderror" name="division" value="{{ $data->division }}" autocomplete="division" autofocus >
                
                        @error('division')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="district" class="col-md-4 col-form-label text-md-right">{{ __('District') }}</label>
                
                    <div class="col-md-6">
                        <input id="district" type="text" class="form-control @error('district') is-invalid @enderror" name="district" value="{{ $data->district }}" autocomplete="district" autofocus >
                
                        @error('district')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="taluk" class="col-md-4 col-form-label text-md-right">{{ __('Taluk') }}</label>
                
                    <div class="col-md-6">
                        <input id="taluk" type="text" class="form-control @error('taluk') is-invalid @enderror" name="taluk" value="{{ $data->taluk }}" autocomplete="taluk" autofocus >
                
                        @error('taluk')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <button class="btn btn-success" type="submit">Update</button>
              
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