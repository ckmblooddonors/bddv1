<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Auth;
use App\Models\User;
use App\Models\Requisition;
use Illuminate\Http\Request;

class RequisitionDonorSearchController extends Controller
{
    public function __invoke(Requisition $requisition)
    {
       // Predefine days, //Add as input in the form
        $setDays = 30;
        if (request()->days) {
            $setDays = request()->days;
        }
        return view('admin.requisition.donorsearch.index')
        ->withData(User::where(['blood_group'=>$requisition->blood_group,'is_donor'=>1])
                        ->whereDate('last_donated','<',\Carbon\Carbon::now()->subDays($setDays))
                        // ->whereDate('can_not_donate_until','<',\Carbon\Carbon::now())
                        ->orderBy('last_donated', 'ASC')
                        ->paginate(20))
        ->withRequisition($requisition);
    }


}
