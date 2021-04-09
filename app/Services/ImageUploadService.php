<?php
/**
 * This service will handle all file uploads
 */
namespace App\Services;

use Auth;
use App\User;


class ImageUploadService
{
	/**
	 * This function class uploads to cloudinary or local storage.
	 */
	function __construct($argument)
	{ 
		
	}

	static public function Upload($value='')
	{
		return dd($value->all());
	}

	static public function Delete($value='')
	{
		# code...
	}


}