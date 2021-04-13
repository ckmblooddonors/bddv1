{{trans("List of donations")}} - <br>
@forelse($data->userDonations as $donation)
<strong>{{$donation->user->name}}</strong> {{__("donated")}} <strong>{{$donation->unit}} </strong> {{__("unit")}}<br>
@empty
{{__("Sorry! No donation recoded yet.")}}
@endforelse