@extends('layouts.app')

@section('content')
  <div class="container">
  	@include('layouts.message')
    <div class="row justify-content-center">
      <div class="col-sm-12">
      	<div class="card">
      		<div class="card-header">
      			{{trans('Donation Page')}}
            <div class="card-header-actions">
              <a class="btn btn-primary btn-sm" href="{{route('donation.create')}}">{{trans('Create')}}</a>
            </div>
      		</div>
      		<div class="card-body">
      			            <table class="table">
              <thead>
                <tr>
                  <th>{{trans('Requisition ID')}}</th>
                  <th>{{trans('Unit')}}</th>
                  <th>{{trans('Date')}}</th>
                  <th>{{trans('Action')}}</th>
                  
                </tr>
              </thead>
              <tbody>
                @forelse($data as $d)
                <tr>
                  <td>{{$d->requisition_id ?? "M/E"}}</td>
                  <td>{{$d->unit}}</td>
                  <td>{{$d->date}}</td>
                  
                  <td>
                    <form action="{{ route('donation.destroy',[$d->id]) }}" method="POST">
                    @csrf
                    @method('DELETE') 
                    <a class="btn btn-primary btn-sm" href="{{route('donation.show',$d->id)}}">{{trans('Show')}}</a>
                    <a class="btn btn-primary btn-sm" href="{{route('donation.edit',$d->id)}}">{{trans('Edit')}}</a>
                    <button type="submit"  class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to Delete')">{{__("Delete")}}</button>
                        </form>
                  </td>
                </tr>
                @empty
                <tr>
                  <td colspan="3">{{__("Sorry ! No Donation Found.")}}</td>
                  
                </tr>
                
                @endforelse
                
              </tbody>
              
            </table>
            * M/E = {{trans('Manual Entry')}}
      		</div>
      		<div class="card-footer">
      			<a class="btn btn-primary" href="{{url()->previous()}}">{{__("Back")}}</a>
      		</div>
      		
      	</div>
      </div>
  </div>
</div>
@endsection