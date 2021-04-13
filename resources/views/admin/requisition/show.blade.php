@extends('layouts.app')

@section('content')
  <div class="container-fluid">
  	@include('layouts.message')
    <div class="row justify-content-center">
      <div class="col-sm-12">
      	<div class="card shadow-sm">
      		<div class="card-header">
            <div class="card-header-actions">
              <div class="card-header-actions">
                <a class="card-header-action btn-setting text-danger" href="{{route('admin.requisition.donation.index',$data->id)}}"><i class="fas fa-tint"></i> {{__("Donations")}}</a>
                <a class="card-header-action btn-setting text-info" href="
                {{route('admin.requisition.donorsearch.index',$data->id)}}"><i class="fas fa-search"></i> {{__("Available Donor")}}</a>
              </div>
            </div>
      			{{trans('Showing Requisition for ')}} {{$data->patient_name}}.
      		</div>
      		<div class="card-body">

            <strong>{{__("Priority")}} : {{PriorityFunction($data->priority)}}</strong><br>
            <hr>
            <h5>{{__("Details Contact")}}:</h5>
            {{__('Name')}}:
            <strong>{{$data->contact_name}}</strong><br>
            {{__('Contact Number')}}:
            <strong>{{$data->contact}}</strong><br>
            {{__("Alternate Contact Number")}}:
            <strong>{{$data->alternate_contact}}</strong>
      			<hr>
            {{__("Blood Needed On")}}: <strong>{{$data->when_wanted}}</strong><br>
            {{__("Blood Group")}} : <strong>{{BloodGroupFunction($data->blood_group)}}</strong><br>
            {{__("Unit")}} : <strong>{{$data->unit}}</strong>
            <hr>
            <!-- Error showing. -->
            @include('admin.requisition.parts.donation_list')

      		</div>
      		<div class="card-footer">
      			@include('admin.requisition.parts.comments')
      		</div>
      		
      	</div>
      </div>
  </div>
</div>
@endsection