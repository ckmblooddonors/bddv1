@extends('layouts.app')

@section('content')
  <div class="container-fluid">
  	@include('layouts.message')
    <div class="row justify-content-center">
      <div class="col-sm-12">
      	<div class="card">
      		<div class="card-header">
      			<div class="card-header-actions">
             <a class="btn btn-primary btn-sm" href="{{route('admin.donor.index')}}">{{trans('Search All Donors')}}</a>
            </div>
            {{trans('Check available User for Blood Donations.')}}
      		</div>
      		<div class="card-body " style="padding: 0px;">
      			<table class="table table-sm table-bordered table-responsive-sm">
              <thead>
                <tr>
                  <th>{{trans('Name')}}</th>
                  <th>{{trans('Can Donate Blood?')}}</th>
                  <th>{{trans('Last Donated')}}</th>
                  <th>{{trans('Action')}}</th>
                </tr>
              </thead>
              <tbody>
                @forelse($data as $d)
                <tr>
                  <td><a href="{{route('admin.usermanager.show',$d->id)}}">{{$d->name}}</a></td>
                  <th>
                    {{$d->can_not_donate_until ?? "Yes."}}
                  </th>
                  <td>{{$d->last_donated}}({{ (\Carbon\Carbon::now()->diffInDays ($d->last_donated->toDateTimeString()))}} Days)</td>
                  <td>
                    <form action="{{ route('admin.usermanager.sendmail',$d->id) }}" method="POST">
                    @csrf
                    <input type="hidden" name="requisitionMail" value="{{$requisition->id}}" hidden>
                    {{-- <a class="btn btn-primary btn-sm" href="">{{trans('Send Mail')}}</a> --}}
                    <button type="submit"  class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to Send mail to current user?')">{{__("Send Request Mail")}}</button>
                    </form>                    
                  </td>
                </tr>
                @empty
                <tr>
                  <td colspan="2">{{__("Sorry ! No Data Found.")}}</td>
                  
                </tr>
                
                @endforelse
                
              </tbody>
              
            </table>
            {{$data->links()}}
      		</div>
      		<div class="card-footer">
      			<a class="btn btn-primary" href="{{url()->previous()}}">{{__("Back")}}</a>
      		</div>
      		
      	</div>
      </div>
  </div>
</div>
@endsection