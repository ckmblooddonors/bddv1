@extends('layouts.app')

@section('content')
  <div class="container-fluid">
  	@include('layouts.message')
    <div class="row justify-content-center">
      <div class="col-sm-12">
      	<div class="card shadow-sm">
      		<div class="card-header">
      			{{trans('Blood Requisition For Patient')}}
      		</div>
      		<div class="card-body">
      			<form action="{{route('admin.requisition.store')}}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="form-group row">
                  <label for="patient_name" class="col-md-4 col-form-label text-md-right">{{ __('Patient Name') }}</label>
              
                  <div class="col-md-6">
                      <input id="patient_name" type="text" class="form-control @error('patient_name') is-invalid @enderror" name="patient_name" value="{{ old('patient_name') }}" autocomplete="patient_name" autofocus >
              
                      @error('patient_name')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
              </div>
              <div class="form-group row">
                  <label for="contact_name" class="col-md-4 col-form-label text-md-right">{{ __("Patient's Contact Name") }}</label>
              
                  <div class="col-md-6">
                      <input id="contact_name" type="text" class="form-control @error('contact_name') is-invalid @enderror" name="contact_name" value="{{ old('contact_name') }}" autocomplete="contact_name" autofocus >
              
                      @error('contact_name')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
              </div>
              <div class="form-group row">
                  <label for="hospital_name" class="col-md-4 col-form-label text-md-right">{{ __('Hospital Name') }}</label>
              
                  <div class="col-md-6">
                      <input id="hospital_name" type="text" class="form-control @error('hospital_name') is-invalid @enderror" name="hospital_name" value="{{ old('hospital_name') }}" autocomplete="hospital_name" autofocus >
              
                      @error('hospital_name')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
              </div>
              <div class="form-group row">
                  <label for="pincode" class="col-md-4 col-form-label text-md-right">{{ __('Pincode') }}</label>
              
                  <div class="col-md-6">
                      <input id="pincode" type="number" class="form-control @error('pincode') is-invalid @enderror" name="pincode" value="{{ old('pincode') }}" autocomplete="pincode" autofocus >
              
                      @error('pincode')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
              </div>
              <div class="form-group row">
                  <label for="contact" class="col-md-4 col-form-label text-md-right">{{ __('Contact') }}</label>
              
                  <div class="col-md-6">
                      <input id="contact" type="number" class="form-control @error('contact') is-invalid @enderror" name="contact" value="{{ old('contact') }}" autocomplete="contact" autofocus >
              
                      @error('contact')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
              </div>
              
              <div class="form-group row">
                  <label for="alternate_contact" class="col-md-4 col-form-label text-md-right">{{ __('Alternate Contact') }}</label>
              
                  <div class="col-md-6">
                      <input id="alternate_contact" type="number" class="form-control @error('alternate_contact') is-invalid @enderror" name="alternate_contact" value="{{ old('alternate_contact') }}" autocomplete="alternate_contact" autofocus >
              
                      @error('alternate_contact')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
              </div>

              <div class="form-group row">
                  <label for="message" class="col-md-4 col-form-label text-md-right">{{ __('Message') }}</label>
              
                  <div class="col-md-6">
                      <input id="message" type="text" class="form-control @error('message') is-invalid @enderror" name="message" value="{{ old('message') }}" autocomplete="message" autofocus >
              
                      @error('message')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
              </div>
              
              <div class="row">
                  <div class="form-group col-sm-3">    
                    <label for="blood_group">{{__('Blood Group')}}:</label>
                    <select class="form-control" name="blood_group">
                      <option value="1">A+</option>
                      <option value="2">A-</option>
                      <option value="3">B+</option>
                      <option value="4">B-</option>
                      <option value="5">0+</option>
                      <option value="6">0-</option>
                      <option value="7">AB+</option>
                      <option value="8">AB-</option>
                    </select>
                </div>
                <div class="form-group col-sm-6">
                  <label for="donation_type">{{__("Donation Type")}}:</label>
                  <select class="form-control" name="donation_type">
                    <option value="1">{{__("Blood")}}</option>
                    <option value="2">{{__("Plazma")}}</option>
                    <option value="3">{{__('Platelate')}}</option>
                    <option value="4">{{__('Others')}}</option>
                  </select>
              </div>
                <div class="form-group col-sm-3">
                  <label for="unit">{{__("Unit Needed")}} :</label>
                  <input class="form-control" name="unit" type="number" value="1">
              </div>

            </div>
            <hr>
            <div class="row">
              <div class="form-group col-sm-6">
                <label for="when_wanted">{{__('When Needed')}}:</label>
                <div class="row">
                <div class="col-sm-6">
                 
                    <input class="form-control @error('when_wanted') is-invalid @enderror" id="when_wanted" name="when_wanted" type="date" value="{{old('when_wanted')}}">
                   
                    
                  @error('when_wanted')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                  @enderror
                </div>

                <div class="col-sm-6">
                  <input class="form-control" id="when_wanted_time" name="when_wanted_time" type="time" value="{{old('when_wanted_time')}}">
                </div>
              </div>
                  
                </div>
              <div class="form-group col-sm-6">    
                  <label for="priority">{{__('Priority')}}:</label>
                  <select class="form-control" name="priority">
                    <option value="1">{{__("Normal")}}</option>
                    <option value="2">{{__("Urgent")}}</option>
                    <option value="3">{{__("Emergency")}}</option>
                    <option value="4">{{__("Critical")}}</option>
                  </select>
              </div>
                
            </div>
            <hr>
                <div class="form-group col-sm-3">    
                    <label for="status">{{__('Status')}} : </label>
                    <select class="form-control" name="status">
                      <option value="1">{{__("New Request")}}</option>
                      <option value="2">{{__("Active")}}</option>
                      <option value="3">{{__("Being Reviewed")}}</option>
                      <option value="4">{{__("Accepted")}}</option>
                      <option value="5">{{__("Closed")}}</option>
                    </select>
                </div>
            <hr>
            <div class="row">
                    <div class="form-group col-sm-12">
                                  <input type="file" name="file" class="form-control">
                    </div>              
                  </div>
            <hr>
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