@extends('layouts.app')

@section('content')
  <div class="container-fluid">
  	@include('layouts.message')
    <div class="row justify-content-center">
      <div class="col-sm-12">
      	<div class="card shadow-sm">
      		<div class="card-header">
            <div class="card-header-actions">
            <form action="{{route('admin.usermanager.resetpassword',$data->id)}}" method="POST">
              @csrf
              <button class="btn btn-primary btn-sm" type="submit">{{__("Send Reset Password Mail")}}</button>
              
            </form>
          </div>
      			<h4>{{$data->name}}</h4> {{trans('User Details')}}
      		</div>
      		<div class="card-body">
      			<strong>{{__('Username')}} : {{$data->username}}</strong><br>
            {{trans('Email')}} : {{$data->email}}<br>
            {{trans('Mobile')}} : {{$data->mobile}}<br>
            {{trans('Alternate Contact')}} : {{$data->other_contact}}<br>
            {{trans('Blood Group')}} : {{$data->blood_group? BloodGroupFunction($data->blood_group):""}}<br>
            {{trans('Last Donation')}} : {{$data->last_donated ?? "N/A"}}<br>
            {{trans('Registered As Donor?')}} {{$data->is_donor == 1 ? "Yes":'No'}}<br>
            {{trans('Can Not Donate Until')}} : {{$data->can_not_donate_until ?? "N/A"}}<br>
            @if(!empty($data->donor_id))
              {{trans('Donor ID')}} :
              @forelse($data->donor_id as $donor_id)
              {{$donor_id}}<br>
              @empty
              {{trans('Sorry! No Donor ID Needed.')}}
              @endforelse
            @endif

      		</div>
      		<div class="card-footer">
            <a class="btn btn-primary btn-sm" href="{{url()->previous()}}">{{__('Back')}}</a>
      			<a class="btn btn-primary btn-sm" href="{{route('admin.usermanager.edit',$data->id)}}">{{trans('Edit')}}</a>
      		</div>
      		
      	</div>
      </div>
  </div>
</div>
@endsection