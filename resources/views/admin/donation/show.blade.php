@extends('layouts.app')

@section('content')
  <div class="container-fluid">
  	@include('layouts.message')
    <div class="row justify-content-center">
      <div class="col-sm-12">
      	<div class="card">
      		<div class="card-header">
      			{{$data->user->name}}'s {{__("donation")}}-
      		</div>
      		<div class="card-body">
      			@if($data->requisition_id)
            {{__('Requisition Linke')}} : <a href="{{route('admin.requisition.show',$data->requisition_id)}}">{{__("Show")}}</a><br>
            @endif
            {{__('Unit')}} : {{$data->unit}}<br>
            {{__('Donation Type')}} : {{TypeFunction($data->type)}}<br>
            @if($data->approver_id)
            {{__('Approved By')}} : {{$data->approver_id}}<br>
            @endif
            {{__('Comment')}} :
            <p>{{$data->comment}}</p>
            {{trans('Date')}} :
            <p>{{$data->date}}</p>
      		</div>
      		<div class="card-footer">
      			<a class="btn btn-primary" href="{{ url()->previous() }}">{{__("Back")}}</a>
            <a class="btn btn-success" href="{{ route('admin.donation.certificate.download',$data->id) }}" target="_blank">{{__("Download Certificate")}}</a>
      		</div>
      		
      	</div>
      </div>
  </div>
</div>
@endsection