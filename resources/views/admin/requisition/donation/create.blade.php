@extends('layouts.app')

@section('content')
  <div class="container-fluid">
  	@include('layouts.message')
    <div class="row justify-content-center">
      <div class="col-sm-12">
      	<div class="card">
      		<div class="card-header">
      			{{("Manual Donation Creation.")}}
      		</div>
      		<div class="card-body">
      			<form action="{{route('admin.requisition.donation.store',$requisition->id)}}" method="POST">
              @csrf
              <div class="form-group">    
                    <label for="type">{{__('Select Donor')}} : </label>
                    <select class="form-control" name="user">
                      @foreach($users as $user_id => $user_name)
                      <option value="{{$user_id}}">{{$user_name}}</option>
                      @endforeach
                    </select>
                </div>
              <div class="form-group">    
                    <label for="type">{{__('Blood Donation Type')}} : </label>
                    <select class="form-control" name="type">
                      <option value="1">{{__('Blood Donation')}}</option>
                      <option value="2">{{__('Others')}}</option>
                    </select>
                </div>
                
                <div class="form-group">
                  <label for="unit">Unit</label>
                  <input class="form-control" type="number" name="unit" id="unit">
                </div>
                
                <div class="form-group">
                  <label for="date">Date</label>
                  <input class="form-control" type="date" name="date" id="date" >
                </div>

              <div class="form-group">
                <label for="message-text" class="col-form-label">{{__('Message')}}:</label>
                <textarea class="form-control" name="message" id="message-text"></textarea>
              </div>

              <button type="submit" class="btn btn-success">Save</button>
            </form>
      		</div>
      		<div class="card-footer">
      			<a class="btn btn-primary" href="{{url()->previous()}}">Back</a>
      		</div>
      		
      	</div>
      </div>
  </div>
</div>
@endsection