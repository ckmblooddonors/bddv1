@extends('layouts.app')

@section('content')
  <div class="container">
  	@include('layouts.message')
    <div class="row justify-content-center">
      <div class="col-sm-12">
      	<div class="card">
      		<div class="card-header">
      			{{trans('Donation Details')}} :
      		</div>
      		<div class="card-body">
      			{{__("Donation Type")}} : {{TypeFunction($data->type)}}<br>
            {{__("Unit Donated")}} : {{$data->unit}}<br>
            {{__("Donation Date")}} : {{$data->date}}<br>
            {{__("Comment")}}:
            <p>{{$data->comment}}</p>
            
            @if($data->requisition_id)
            <hr>
            <a href="{{route('requisition.show',$data->requisition_id)}}">{{__("Requisition Entry")}}</a>
            @endif
      		</div>
      		<div class="card-footer">
      			<a class="btn btn-primary" href="{{url()->previous()}}">{{__("Back")}}</a>
      		</div>
      		
      	</div>
      </div>
  </div>
</div>
@endsection 