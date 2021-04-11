@extends('layouts.app')

@section('content')
  <div class="container-fluid">
  	@include('layouts.message')
    <div class="row justify-content-center">
      <div class="col-sm-12">
      	<div class="card">
      		<div class="card-header">
            <a class="btn btn-primary btn-sm" style="float: right;" href="{{route('admin.pincode.create')}}">{{__("Create")}}</a>
      			{{__('List of Pincodes')}}
      		</div>
      		<div class="card-body" style="padding: 0px;">
            <table class="table table-sm table-bordered table-responsive-sm">
              <thead>
                <tr>
                  <th>{{trans('ID')}}</th>
                  <th>{{trans('Pincode')}}</th>
                  <th>{{trans('State')}}</th>
                  <th>{{trans('District')}}</th>
                  <th>{{trans('Action')}}</th>
                </tr>
              </thead>
              <tbody>
                @forelse($data as $d)
                <tr>
                  <td>{{$d->id}}</td>
                  <td>{{$d->pincode}}</td>
                  <td>{{$d->state}}</td>
                  <td>{{$d->district}}</td>
                  <td>
                    <form action="{{ route('admin.pincode.destroy',[$d->id]) }}" method="POST">
                            @csrf
                            @method('DELETE') 
                    <a class="btn btn-primary btn-sm" href="{{route('admin.pincode.show',$d->id)}}">{{trans('Show')}}</a>
                    <a class="btn btn-primary btn-sm" href="{{route('admin.pincode.edit',$d->id)}}">{{trans('Edit')}}</a>
                    <button type="submit"  class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to Delete')">{{__("Delete")}}</button>
                        </form>
                  </td>
                </tr>
                @empty
                <tr>
                  <td colspan="3">{{__("Sorry ! No Pincode added.")}}</td>
                  
                </tr>
                
                @endforelse
                
              </tbody>
              
            </table>
      			
            
      		</div>
      		<div class="card-footer">
      			<a class="btn btn-primary btn-sm" href="{{url()->previous()}}">{{__("Back")}}</a>
      		</div>
      		
      	</div>
      </div>
  </div>
</div>
@endsection