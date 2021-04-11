<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pincode;
use Illuminate\Http\Request;

class PincodeController extends Controller
{
    private $validateRules = ['pincode'=>'required','state'=>'required','circle'=>'required','region'=>'required','division'=>'required','district'=>'required','taluk'=>'required'];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Pincode::paginate(10);
        return view('admin.pincode.index')->withData($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pincode.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate(['pincode'=>'required|unique:pincodes']); //One pincode serve a lot of area.
        $request->validate($this->validateRules);
        $createPincode = Pincode::create($request->only(['pincode','state','circle','region','division','district','taluk']));
        return redirect()->route('admin.pincode.index')->with('success','Pincode Data Saved.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pincode  $pincode
     * @return \Illuminate\Http\Response
     */
    public function show(Pincode $pincode)
    {
        return view('admin.pincode.show')->withData($pincode);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pincode  $pincode
     * @return \Illuminate\Http\Response
     */
    public function edit(Pincode $pincode)
    {
        return view('admin.pincode.edit')->withData($pincode);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pincode  $pincode
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pincode $pincode)
    {
        $request->validate($this->validateRules);
        $updatePincode = $pincode->update($request->only(['pincode','state','circle','region','division','district','taluk']));
        return redirect()->route('admin.pincode.index')->with('success','Pincode Data Updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pincode  $pincode
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pincode $pincode)
    {
        $pincode->delete();
        return redirect()->route('admin.pincode.index')->with('success','Pincode Data Deleted.');
    }
}
