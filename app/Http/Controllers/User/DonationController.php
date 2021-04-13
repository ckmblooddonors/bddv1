<?php

namespace App\Http\Controllers\User;

use Auth;
use App\Models\Donation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DonationController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.donation.index')
        ->withData(Donation::where('user_id',Auth::id())
        ->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.donation.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate(['type'=>'required|numeric','unit'=>'required|numeric','date'=>'required']);
        $date = \Carbon\Carbon::parse($request->date . ' ' . $request->time ?? '')->toDateTimeString();
        $data= $request->only(['type','unit','comment']);
        $data+=['user_id'=>Auth::id(),'date'=>$date];
        
        Donation::create($data);
        if (auth()->user()->last_donated < $date ) {
            auth()->user()->update(['last_donated'=>$date]);
        }
                
        return redirect()->route('donation.index')->with('info','Donation data saved.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Donation  $donation
     * @return \Illuminate\Http\Response
     */
    public function show(Donation $donation)
    {
        if ($donation->user_id != Auth::id()) {
            return redirect()->back()->with('error','Sorry! It is not your donation to see.');
        }
        return view('user.donation.show')->withData($donation);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Donation  $donation
     * @return \Illuminate\Http\Response
     */
    public function edit(Donation $donation)
    {
        if ($donation->approver_id) {
            return redirect()->back()->with('error','Please contact ADMIN for update.');
        }
        return view('user.donation.edit')->withData($donation);
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Donation  $donation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Donation $donation)
    {
        if (!empty($donation->requisition_id)) {
            return back()->with('error','Can not delete. Please contact admin.');
        }

        $donation->delete();
        return redirect()->back()->with('success','Delete Complete.');
    }
}
