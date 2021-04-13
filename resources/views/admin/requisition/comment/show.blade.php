@extends('layouts.app')

@section('content')
  <div class="container-fluid">
  	@include('layouts.message')
    <div class="row justify-content-center">
      <div class="col-sm-12">
      	<div class="card shadow-sm">
      		<div class="card-header">
      			@if($data->request_type == 1)
            Requisition for {{$requisition->patient_name}}.
            @else
            Comment.
            @endif 
            
      		</div>
      		<div class="card-body">
            @if(empty($data->status ) && $data->request_type == 1)
            <form action="{{route('admin.requisition.donation.store',$requisition->id)}}" method="POST">
                @csrf
                <input type="hidden" name="user" value="{{$data->user_id}}">
                <input type="hidden" name="comment_id" value="{{$data->id}}">
               <div class="form-group">
                  <div class="form-group">    
                      <label for="type">{{__("Donation Type")}} : </label>
                      <select class="form-control" name="type">
                        <option value="1">{{__("Blood")}}</option>
                      </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="unit-text" class="col-form-label">{{__("Unit")}}:</label>
                  <input type="number" class="form-control" name="unit" id="unit-text" value="1"></input>
                </div>
                <div class="form-group">
                  <label for="message-text" class="col-form-label">{{__("Message")}}:</label>
                  <textarea class="form-control" name="message" id="message-text"></textarea>
                </div>
                
              
            
            
              <button type="submit" class="btn btn-primary">{{__("Accept Donation")}}</button>
           
            </form>
            @elseif(!empty($data->status ) )
            <div class="alert alert-warning alert-block " id="alert-block">
              <strong>{{__("This Blood donation Request has been accepted.")}}</strong><br>
            </div>
            @endif
            <strong>{{__("Comment")}} :</strong>
      			<p>{{$data->comment}}</p>
            
      		</div>
      		<div class="card-footer">
      			<a class="btn btn-primary" href="{{url()->previous()}}">{{__("Back")}}</a>
            <a class="btn btn-primary" href="{{route('admin.requisition.comment.index',$requisition->id)}}">{{__("Comment Index")}}</a>
            <a class="btn btn-primary" href="{{route('admin.donation.index')}}">{{__("Accept Donations")}}</a>
      		</div>
      		
      	</div>
      </div>
  </div>
</div>
@endsection