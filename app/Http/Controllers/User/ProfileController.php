<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use Illuminate\Http\Request;
use Auth;
use App\Services\ImageUploadService;

class ProfileController extends Controller
{    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        return view('user.profile.edit')->withData(Auth::user());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        // Upload Image
        $imageUpload = new ImageUploadService(auth()->user());

        $data = $request->validate([
            'name'=>'required',
            'mobile' =>'required|digits:10',
            'other_contact'=>"nullable|different:contact|digits:10",
            'blood_group'=>"nullable",
            'is_donor'=>'nullable',
            'last_donated'=>'nullable',
            'can_not_donate_until'=>'nullable',
            'file' => 'image|mimes:jpg,jpeg,gif,png|max:500',
            'address'=>'nullable|string'
        ]);

        if (!empty($request->file('file'))) {
            $data += ['avatar'=>$imageUpload->avatarUpload()];
        }
        
        // Update current user's data
        auth()->user()->update($data);
        
        // Update profile data for this user.
        $updateProfile = Profile::updateOrCreate(
            ['user_id'=>auth()->user()->id], //please find the user
            ['user_id'=>auth()->user()->id,'address'=>request()->address], //or creatre the user
        )->get();

        return back()->with('success','Thank you. Your data is updated.');
    }
}
