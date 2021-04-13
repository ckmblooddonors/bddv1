@extends('layouts.app')

@section('content')
  <div class="container-fluid">
  	@include('layouts.message')
    <div class="row justify-content-center">
      <div class="col-sm-12">
      	<div class="card">
      		<div class="card-header">
      			{{trans('Current Blood Donation Requests')}}
            <a class="btn btn-primary btn-sm" style="float: right;" href="{{route('requisition.create')}}">Request Blood Donation</a>
      		</div>
      		<div class="card-body">
      			            <table class="table">
              <thead>
                <tr>
                  <th>{{trans('ID')}}</th>
                  <th>{{trans('Group')}}</th>
                  <th>{{trans('Priority')}}</th>
                  <th>{{trans('Date')}}</th>
                  <th>{{trans('Status')}}</th>
                  
                  <th>{{trans('Action')}}</th>
                </tr>
              </thead>
              <tbody>
                @forelse($data as $d)
                <tr>
                  <td>{{$d->id}}</td>
                  <td>{{BloodGroupFunction($d->blood_group)}}</td>
                  <td>{{PriorityFunction($d->priority)}}</td>
                  <td>{{$d->when_wanted}}</td>
                  <td>{{StatusFunction($d->status)}}</td>
                  <td>
                    <a class="btn btn-primary btn-sm" href="{{route('requisition.show',$d->id)}}">{{trans('Show')}}</a>
                  </td>
                </tr>
                @empty
                <tr>
                  <td colspan="2">{{__('Sorry ! No Data Found.')}}</td>
                  
                </tr>
                
                @endforelse
                
              </tbody>
              
            </table>
      		</div>
      		<div class="card-footer">
      			<a class="btn btn-primary" href="{{url()->previous()}}">{{__('Back')}}</a>
      		</div>
      		
      	</div>
      </div>
  </div>
</div>
@endsection