@extends('layouts.app')

@section('content')
  <div class="container-fluid">
  	@include('layouts.message')
    <div class="row justify-content-center">
      <div class="col-sm-12">
      	<div class="card shadow-sm">
      		<div class="card-header">
      			{{trans('Edit Requisition.')}}
      		</div>
      		<div class="card-body">
      			<form action="{{route('admin.requisition.update',$data->id)}}" method="POST" >
              @csrf
              @method('put')
              <div class="form-group row">
                  <label for="patient_name" class="col-md-4 col-form-label text-md-right">{{ __('Patient Name') }}</label>
              
                  <div class="col-md-6">
                      <input id="patient_name" type="text" class="form-control @error('patient_name') is-invalid @enderror" name="patient_name" value="{{ $data->patient_name }}" autocomplete="patient_name" autofocus >
              
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
                      <input id="contact_name" type="text" class="form-control @error('contact_name') is-invalid @enderror" name="contact_name" value="{{ $data->contact_name }}" autocomplete="contact_name" autofocus >
              
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
                      <input id="hospital_name" type="text" class="form-control @error('hospital_name') is-invalid @enderror" name="hospital_name" value="{{ $data->hospital_name }}" autocomplete="hospital_name" autofocus >
              
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
                      <input id="pincode" type="number" class="form-control @error('pincode') is-invalid @enderror" name="pincode" value="{{ $data->pincode }}" autocomplete="pincode" autofocus >
              
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
                      <input id="contact" type="number" class="form-control @error('contact') is-invalid @enderror" name="contact" value="{{ $data->contact }}" autocomplete="contact" autofocus >
              
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
                      <input id="alternate_contact" type="number" class="form-control @error('alternate_contact') is-invalid @enderror" name="alternate_contact" value="{{ $data->alternate_contact }}" autocomplete="alternate_contact" autofocus >
              
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
                      <input id="message" type="text" class="form-control @error('message') is-invalid @enderror" name="message" value="{{ $data->message }}" autocomplete="message" autofocus >
              
                      @error('message')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
              </div>
              
              <div class="row">
                  <div class="form-group col-sm-3">    
                    <label for="blood_group">{{__("Blood Group")}}:</label>
                    <select class="form-control" name="blood_group">
                      <option value="1" {{$data->blood_group == 1 ? "selected":'' }}>A+</option>
                      <option value="2" {{$data->blood_group == 2 ? "selected":'' }}>A-</option>
                      <option value="3" {{$data->blood_group == 3 ? "selected":'' }}>B+</option>
                      <option value="4" {{$data->blood_group == 4 ? "selected":'' }}>B-</option>
                      <option value="5" {{$data->blood_group == 5 ? "selected":'' }}>0+</option>
                      <option value="6" {{$data->blood_group == 6 ? "selected":'' }}>0-</option>
                      <option value="7" {{$data->blood_group == 7 ? "selected":'' }}>AB+</option>
                      <option value="8" {{$data->blood_group == 8 ? "selected":'' }}>AB-</option>
                    </select>
                </div>
                <div class="form-group col-sm-6">
                  <label for="donation_type">{{__('Donation Type')}}:</label>
                  <select class="form-control" name="donation_type">
                    <option value="1" {{$data->donation_type == 1 ? "selected":'' }}>{{__("Blood")}}</option>
                    <option value="2" {{$data->donation_type == 2 ? "selected":'' }}>{{__("Plazma")}}</option>
                    <option value="3" {{$data->donation_type == 3 ? "selected":'' }}>{{__("Platelate")}}</option>
                    <option value="4" {{$data->donation_type == 4 ? "selected":'' }}>{{__("Others")}}</option>
                  </select>
              </div>
                <div class="form-group col-sm-3">
                  <label for="unit">{{__("Unit Needed")}}:</label>
                  <input class="form-control" name="unit" type="number" value="{{$data->unit}}">
              </div>

            </div>
            <hr>
            <div class="row">
              <div class="form-group col-sm-6">
                <label for="when_wanted">{{__("When Needed")}}:</label>
                <div class="row">
                <div class="col-sm-6">
                  <input class="form-control" id="when_wanted" name="when_wanted" type="date" value="{{\Carbon\Carbon::parse($data->when_wanted)->toDateString()}}">
                </div>
                <div class="col-sm-6">
                  <input class="form-control" id="when_wanted_time" name="when_wanted_time" type="time" value="{{\Carbon\Carbon::parse($data->when_wanted)->toTimeString()}}">
                </div>
              </div>
                  
                </div>
              <div class="form-group col-sm-6">    
                  <label for="priority">{{__("Priority")}}:</label>
                  <select class="form-control" name="priority">
                    <option value="1" {{$data->priority == 1 ? 'selected':''}}>{{__("Normal")}}</option>
                    <option value="2" {{$data->priority == 2 ? 'selected':''}}>{{__("Urgent")}}</option>
                    <option value="3" {{$data->priority == 3 ? 'selected':''}}>{{__("Emergency")}}</option>
                    <option value="4" {{$data->priority == 4 ? 'selected':''}}>{{__("Critical")}}</option>
                  </select>
              </div>
                
            </div>
            <hr>
                <div class="form-group col-sm-3">    
                    <label for="status">{{__("Status")}} : </label>
                    <select class="form-control" name="status">
                      <option value="1" {{$data->donation_type == 1 ? "selected":'' }}>{{__("New Request")}}</option>
                      <option value="2" {{$data->donation_type == 2 ? "selected":'' }}>{{__("Active")}}</option>
                      <option value="3" {{$data->donation_type == 3 ? "selected":'' }}>{{__("Being Reviewd")}}</option>
                      <option value="4" {{$data->donation_type == 4 ? "selected":'' }}>{{__("Accepted")}}</option>
                      <option value="5" {{$data->donation_type == 5 ? "selected":'' }}>{{__("Closed")}}</option>
                      
                    </select>
                </div>
            <hr>

              <button class="btn btn-success" type="submit">{{__("Update")}}</button>
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