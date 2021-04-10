@extends('layouts.app')

@section('content')
  <div class="container-fluid">
  	@include('layouts.message')
    <div class="row justify-content-center">
      <div class="col-sm-12">
      	<div class="card shadow-sm">
      		<div class="card-header">
      			{{__("Edit")}} {{$data->name}}
      		</div>
      		<div class="card-body">
      			<form action="{{route('admin.usermanager.update',$data->id)}}" method="POST" >
              @csrf
              @method('put')
               <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $data->email }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
              <div class="form-group row">
                  <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
              
                  <div class="col-md-6">
                      <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $data->name }}" autocomplete="name" autofocus >
              
                      @error('name')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
              </div>
              <div class="form-group row">
                  <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('Username') }}</label>
              
                  <div class="col-md-6">
                      <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ $data->username }}" autocomplete="username" autofocus >
              
                      @error('username')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
              </div>
              <div class="form-group row">
                  <label for="pincode_id" class="col-md-4 col-form-label text-md-right">{{ __('Pincode') }}</label>
              
                  <div class="col-md-6">
                      <input id="pincode_id" type="number" class="form-control @error('pincode_id') is-invalid @enderror" name="pincode_id" value="{{ $data->pincode_id }}" autocomplete="pincode_id" autofocus >
              
                      @error('pincode_id')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
              </div>
              

              <!-- Is Admin -->
              <div class="form-group row">
                  <label for="is_admin" class="col-md-4 col-form-label text-md-right">{{ __('Make An Admin ?') }}</label>

                  <div class="col-md-6">
                      <select class="form-control @error('is_admin') is-invalid @enderror" id="is_admin"
                      value=" name="is_admin" >
                      <option value="1" {{$data->is_admin == 1 ? 'selected':''}}>{{__("Yes")}}</option>
                      <option value="0" {{$data->is_admin == 0 ? 'selected':''}}>{{__("No")}}</option>
                      </select>
                      @error('is_admin')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
              </div>
              <div class="form-group row">
                  <label for="mobile" class="col-md-4 col-form-label text-md-right">{{ __('Mobile') }}</label>
              
                  <div class="col-md-6">
                      <input id="mobile" type="number" class="form-control @error('mobile') is-invalid @enderror" name="mobile" value="{{ $data->mobile }}" autocomplete="mobile" autofocus >
              
                      @error('mobile')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
              </div>
              <div class="form-group row">
                  <label for="other_contact" class="col-md-4 col-form-label text-md-right">{{ __('Alternate Contact Number') }}</label>
              
                  <div class="col-md-6">
                      <input id="other_contact" type="number" class="form-control @error('other_contact') is-invalid @enderror" name="other_contact" value="{{ $data->other_contact }}" autocomplete="other_contact" autofocus >
              
                      @error('other_contact')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
              </div>
              <!-- Blood Group -->
                        <div class="form-group row">
                            <label for="blood_group" class="col-md-4 col-form-label text-md-right">{{ __('Blood Group') }}</label>

                            <div class="col-md-6">
                                <select class="form-control @error('blood_group') is-invalid @enderror" id="blood_group" value="{{ old('blood_group') }}" name="blood_group">
                                <option value="1" {{$data->blood_group == 1? 'selected':''}}>A+</option>
                                <option value="2" {{$data->blood_group == 2? 'selected':''}}>A-</option>
                                <option value="3" {{$data->blood_group == 3? 'selected':''}}>B+</option>
                                <option value="4" {{$data->blood_group == 4? 'selected':''}}>B-</option>
                                <option value="5" {{$data->blood_group == 5? 'selected':''}}>O+</option>
                                <option value="6" {{$data->blood_group == 6? 'selected':''}}>O-</option>
                                <option value="7" {{$data->blood_group == 7? 'selected':''}}>AB+</option>
                                <option value="8" {{$data->blood_group == 8? 'selected':''}}>AB-</option>
                                </select>
                                @error('blood_group')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Is Donor -->
                        <div class="form-group row">
                            <label for="is_donor" class="col-md-4 col-form-label text-md-right">{{ __('Are you a blood donor?') }}</label>

                            <div class="col-md-6">
                                <select class="form-control @error('is_donor') is-invalid @enderror" id="is_donor"
                                value="" name="is_donor" >
                                <option value="1" {{$data->is_donor == 1? 'selected':''}}>{{__("Yes")}}</option>
                                <option value="0" {{$data->is_donor == 0? 'selected':''}}>{{__("No")}}</option>
                                </select>
                                @error('is_donor')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Donor -->
                        <div class="form-group row">
                            <label for="last_donated" class="col-md-4 col-form-label text-md-right">{{ __('Last Donation') }}</label>

                            <div class="col-md-6">
                            <input id="schedule_date" name="last_donated" value="{{$data->last_donated? \Carbon\Carbon::parse($data->last_donated)->toDateString():''}}"  placeholder="{{__('Last Donation')}}" type="date" class="form-control" >
                            </div>
                        </div>
                        <!-- Can Not Donate Donor -->
                        <div class="form-group row">
                            <label for="can_not_donate_until" class="col-md-4 col-form-label text-md-right">{{ __('Can Not Donate Blood Until') }}</label>

                            <div class="col-md-6">
                            <input id="schedule_date" name="can_not_donate_until" value="{{$data->can_not_donate_until? \Carbon\Carbon::parse($data->can_not_donate_until)->toDateString():''}}"  placeholder="{{__('Can not Donate blood Until' )}}" type="date" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
              
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