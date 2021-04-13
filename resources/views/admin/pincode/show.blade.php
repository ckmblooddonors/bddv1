@extends('layouts.app')

@section('content')
  <div class="container-fluid">
  	@include('layouts.message')
    <div class="row justify-content-center">
      <div class="col-sm-12">
      	<div class="card">
      		<div class="card-header">
      			{{__("Pincode")}} {{$data->pincode}} {{__("Details")}}
      		</div>
      		<div class="card-body">
      			<p>State: {{$data->state}}</p>
            <p>Circle : {{$data->circle}}</p>
            <p>Region : {{$data->region}}</p>
            <p>Division : {{$data->division}}</p>
            <p>District : {{$data->district}}</p>
            <p>Taluk : {{$data->taluk}}</p>
      		</div>
      		<div class="card-footer">
      			<a class="btn btn-primary" href="{{url()->previous()}}">{{__("Back")}}</a>
      		</div>
      		
      	</div>
      </div>
  </div>
</div>
@endsection