<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class DonorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.donor.index')
        ->withData(User::where('is_donor',1)
                    ->paginate(20)
        );
    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show($user)
    {
        // When going to route /create directly its showing error. Only accept numeric values.
        if (!is_numeric($user)) {
            return back()->with('error','Sorry! Wrong Input.');
        }
        
        return view('admin.donor.show')
        ->withData(User::where('id',$user)->with('donations')->first());
    }


}
