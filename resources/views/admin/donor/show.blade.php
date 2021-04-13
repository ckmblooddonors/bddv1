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
      			<table class="table">
              <thead>
               <th>Requisition ID</th>
               <th>Unit</th>
               <th>Date</th>
              </thead>
              <tbody>
                @forelse($data->donations as $donation)
                <tr>

                <th>
                  @if($donation->requisition_id)
                  <a href="{{route('admin.requisition.show',$donation->requisition_id)}}">Show</a>
                  @else "N/A" 
                  @endif
                </th>
                <th>{{$donation->unit}}</th>
                <th>{{$donation->date}}</th>
                
                </tr>
                @empty
                <tr>
                <td >{{trans('NO Record Found.')}}</td>
                </tr>
                @endif
              </tbody>

              
            </table>
      		</div>
      		<div class="card-footer">
      			<a class="btn btn-primary" href="{{url()->previous()}}">Back</a>
      		</div>
      		
      	</div>
      </div>
  </div>
</div>
@endsection