{{trans("List of donations for this requisition")}}<br>
<table class="table">
              <thead>
                <tr>
                  <th>{{trans('Status')}}</th>
                  <th>{{trans('Type')}}</th>
                  <th>{{trans('Unit')}}</th>
                  <th>{{trans('Name')}}</th>
                  <th>{{trans('Action')}}</th>
                </tr>
              </thead>
              <tbody>
                @forelse($donations as $donation)
                <tr>
                  <td><i  class="fas fa-tint text-danger"></i></td>
                  <td>{{TypeFunction($donation->type)}}</td>
                  <td>{{$donation->unit}}</td>
                  <td>{{$donation->user->name}}</td>
                  <td> --
                  	{{--
                    <form action="{{ route('admin.requisition.donation.destroy',[$requisition->id,$donation->id]) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <a class="btn btn-primary btn-sm" href="{{route('admin.requisition.comment.show',[$requisition->id,$donation->id])}}">{{trans('Show')}}</a>
                    <a class="btn btn-primary btn-sm" href="{{route('admin.requisition.comment.edit',[$requisition->id,$donation->id])}}">{{trans('Edit')}}</a>
                    <button type="submit"  class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to Delete')">{{__("Delete")}}</button>
                        </form>
                    --}}
                  </td>
                </tr>
                @empty
                <tr>
                  <td colspan="2">{{__("Sorry ! No Data Found.")}}</td>
                  
                </tr>
                
                @endforelse
                
              </tbody>
              
            </table>