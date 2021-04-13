<?php

namespace App\Http\Controllers\Admin;

use Auth;
use App\Http\Controllers\Controller;
use App\Models\Donation;
use App\Models\Certificate;
use Illuminate\Http\Request;

class DonationController extends Controller
{
    private $validateRules=['type'=>'required|numeric','unit'=>'required|numeric','date'=>'required'];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.donation.index')->withData(Donation::latest()->with('user')->paginate(20));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.donation.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate($this->validateRules);
        $data= $request->only(['type','unit','comment']);
        
        // Admin can change any kind of donation entry.
        if ($request->requisition_id) {
            $data +=['requisition_id'=>$request->requisition_id];
        }

        $data+=['user_id'=>Auth::id(),'date'=>\Carbon\Carbon::parse($request->date . ' ' . $request->time ?? '')->toDateTimeString()];

        Donation::create($data);

        return redirect()->route('admin.donation.index')->with('info','Donation data saved.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Donation  $donation
     * @return \Illuminate\Http\Response
     */
    public function show(Donation $donation)
    {
        return view('admin.donation.show')->withData($donation->load('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Donation  $donation
     * @return \Illuminate\Http\Response
     */
    public function edit(Donation $donation)
    {
     return view('admin.donation.edit')->withData($donation);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Donation  $donation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Donation $donation)
    {
        $request->validate($this->validateRules);

        $data= $request->only(['type','unit','comment']);

        // Admin can change any kind of donation entry.
        if ($request->requisition_id) {
            $data +=['requisition_id'=>$request->requisition_id];
        }

        $data+=['user_id'=>Auth::id(),'date'=>\Carbon\Carbon::parse($request->date . ' ' . $request->time ?? '')->toDateTimeString()];
        
        $donation->update($data);
        return redirect()->route('admin.donation.index')->with('info','Donation data Updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Donation  $donation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Donation $donation)
    {
        $donation->delete();
        return redirect()->route('admin.donation.index')->with('error','Donation Deleted.');
    }

    



}
