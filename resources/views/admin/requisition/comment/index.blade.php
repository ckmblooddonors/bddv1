@extends('layouts.app')

@section('content')
  <div class="container-fluid">
  	@include('layouts.message')
    <div class="row justify-content-center">
      <div class="col-sm-12">
      	<div class="card shadow-sm">
      		<div class="card-header">
            <a class="btn btn-primary btn-sm" style="float: right;" href="{{route('admin.requisition.comment.create',$requisition->id)}}">{{__("Create")}}</a>
      			{{trans('List of Comments')}}
      		</div>
      		<div class="card-body">
            <table class="table">
              <thead>
                <tr>
                  <th>{{trans('ID')}}</th>
                  <th>{{trans('User Name')}}</th>
                  <th>{{trans('Request Type')}}</th>
                  <th>{{trans('Comment')}}</th>
                </tr>
              </thead>
              <tbody>
                @forelse($data as $d)
                <tr>
                  <td>{{$d->id}}</td>
                  <td>{{$d->user->name}}</td>
                  <td>{{$d->request_type}}</td>
                  <td>{{$d->comment}}</td>
                  <td>
                    <form action="{{ route('admin.requisition.comment.destroy',[$requisition->id,$d->id]) }}" method="POST">
                            @csrf
                            @method('DELETE') 
                    <a class="btn btn-primary btn-sm" href="{{route('admin.requisition.comment.show',[$requisition->id,$d->id])}}">{{trans('Show')}}</a>
                    
                    <button type="submit"  class="btn btn-sm btn-danger" onclick="return confirm('{{__("Are you sure you want to Delete")}}')">{{__("Delete")}}</button>
                        </form>
                  </td>
                </tr>
                @empty
                <tr>
                  <td colspan="3">{{__("Sorry ! No Data found.")}}</td>
                  
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