@extends('layouts.app')
@section('content')
  <div class="container-fluid">
  	@include('layouts.message')
    <div class="row justify-content-center">
      <div class="col-sm-12">
      	<div class="card">
      		<div class="card-header">
            <div class="card-header-actions">
              <a class="btn btn-primary btn-sm" href="{{route('admin.donation.create')}}">{{trans('Create')}}</a>
            </div>
      			{{trans('Donation List')}} :
      		</div>
      		<div class="card-body">
      			<table class="table">
              <thead>
                <tr>
                  <th>{{trans('User')}}</th>
                  <th>{{trans('Unit')}}</th>
                  <th>{{trans('Date')}}</th>
                  <th>{{trans('Requisition')}}</th>
                  <th>{{trans('Action')}}</th>
                </tr>
              </thead>
              <tbody>
                @forelse($data as $d)
                <tr>
                  <td><a href="#">{{$d->user->name}}</a></td>
                  <td>{{$d->unit}}</td>
                  <td>{{$d->date}}</td>
                  @if($d->requisition_id)
                  <td><a href="{{route('admin.requisition.show',$d->requisition_id)}}">{{__("Show Requisition")}}</a></td>
                  @else
                  <td>{{__('M/E')}}</td>
                  @endif

                  <td>
                    <form action="{{ route('admin.donation.destroy',[$d->id]) }}" method="POST">
                    @csrf
                    @method('DELETE') 
                    <a class="btn btn-primary btn-sm" href="{{route('admin.donation.show',$d->id)}}">{{trans('Show')}}</a>
                    <a class="btn btn-primary btn-sm" href="{{route('admin.donation.edit',$d->id)}}">{{trans('Edit')}}</a>
                    <button type="submit"  class="btn btn-sm btn-danger" onclick="return confirm('{{trans("Are you sure you want to Delete")}}')">{{trans('Delete')}}</button>
                        </form>
                  </td>
                </tr>
                @empty
                <tr>
                  <td colspan="2">{{__('Sorry ! No Data Found.')}}</td>
                </tr>
                @endforelse
                
              </tbody>
              
            </table>
            {{$data->links()}}
      		</div>
      		<div class="card-footer">
      			<a class="btn btn-primary" href="{{url()->previous()}}">{{__('Back')}}</a>
      		</div>
      		
      	</div>
      </div>
  </div>
</div>
@endsection