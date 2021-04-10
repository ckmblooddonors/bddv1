@extends('layouts.app')

@section('content')
  <div class="container">
  	@include('layouts.message')
    <div class="row justify-content-center">
      <div class="col-sm-12">
      	<div class="card">
      		<div class="card-header">
      			{{__("Edit")}}
      		</div>
      		<div class="card-body">
      			<form action="{{route('user.profile.update')}}" method="POST" enctype="multipart/form-data">
              @csrf
              
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
                      <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ $data->username }}" autocomplete="username" autofocus disabled >
              
                      @error('username')
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
                  <label for="other_contact" class="col-md-4 col-form-label text-md-right">{{ __('Other Contact Number') }}</label>
              
                  <div class="col-md-6">
                      <input id="other_contact" type="number" class="form-control @error('other_contact') is-invalid @enderror" name="other_contact" value="{{ $data->other_contact }}" autocomplete="other_contact" autofocus >
              
                      @error('other_contact')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
              </div>
              <!-- Address start -->
              <div class="form-group row">
                  <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>
              
                  <div class="col-md-6">
                      <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') ?? ((empty(auth()->user()->profile))?'':auth()->user()->profile->address) }}" autocomplete="address" autofocus >
              
                      @error('address')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
              </div>
                
              <!-- Address End -->
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
                            <label for="blood_donor" class="col-md-4 col-form-label text-md-right">{{ __('Are you a blood donor?') }}</label>

                            <div class="col-md-6">
                                <select class="form-control @error('blood_donor') is-invalid @enderror" id="blood_donor"
                                value="{{ old('blood_donor') }}" name="blood_donor" >
                                <option value="1">{{__("Yes")}}</option>
                                <option value="0">{{__('No')}}</option>
                                </select>
                                @error('blood_donor')
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
                          
                          <p>Avatar Upload : </p>
                          @if(auth()->user()->avatar)
                          <br>
                          Current Avatar
                          <img src="{{auth()->user()->avatar}}" width="150" height="150">
                          @endif
                          <input type="file" name="file" class="form-control">
                        </div>

              <button class="btn btn-success" type="submit">{{__('Update')}}</button>
            </form>
      		</div>
      		<div class="card-footer">
      			<a class="btn btn-primary" href="{{url()->previous()}}">{{__('Back')}}</a>
            <a class="btn btn-primary" href="{{-- route('donation.index') --}}">{{__('Donation')}}</a>
      		</div>
      		
      	</div>
      </div>
  </div>
</div>
@endsection