<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Requisition extends Model
{
    use HasFactory;

    protected $fillable =[
    	'user_id','pincode','hospital_name','patient_name','contact_name','donation_type','blood_group','unit','contact','alternate_contact','when_wanted','message','status','img','priority','seo',
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'donations'=>'array',
        'seo'=>'array',
    ];

    // This returns all donation made for this requisition.
    public function userDonations()
    {
        return $this->hasMany('App\Models\Donation','requisition_id','id');
    }
    // This returns all comment for this requisition
    public function comments()
    {
    	return $this->hasMany('App\Models\RequisitionComment','requisition_id','id');
    }
}
