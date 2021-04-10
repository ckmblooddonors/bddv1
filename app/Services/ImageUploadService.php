<?php
/**
 * This service will handle all file uploads
 */
namespace App\Services;

use Auth;
use App\model\User;
use Illuminate\Support\Facades\Storage;

	/**
	 * This function class uploads to cloud or local storage.
	 */
	class ImageUploadService
	{
	/*
	* Local storage = 1, cloudinary storage = 1
	* Default storage for cloud is abdd, local is null
	*/
	private $defaultStorage = 0;
	private $defaultStoragePath;
	protected $userDetails;

	
	function __construct($userDetails = null)
	{ 
		if (empty($userDetails)) {
			$this->userDetails = auth()->user();
		}else{
			$this->userDetails = $userDetails;
		}
		
	}

	/*
	*	@param $formInputName is the form input field get from request().
	*	@param $subDirectory Subdirectory for the storage, this has a user dir for storing.
	*/

	public function avatarUpload($formInputName='file', $subDirectory='/avatar/')
	{
		// Delete existing file from server

		$usersDir = $subDirectory.$this->userDetails->id.'/';

		if (!empty($this->userDetails->avatar)) {

				$this->delete($this->userDetails->avatar,$usersDir);
			}

		// Upload image files to the server

		if (!empty(request()->file($formInputName))) {
			
				if ($this->defaultStorage == 1) {
                    // Cloudinary
					$uploadedFileUrl = request()->file->storeOnCloudinary('abdd/avatar/'.$this->userDetails->id);  
					return $uploadedFileUrl->getSecurePath();  
				}else{
                    // Local Storage
					$uploadedFileUrl = request()->file->store('public'.$usersDir);
					
					return url(asset('storage/avatar/'.$this->userDetails->id.str_replace('public'.$usersDir,'',$uploadedFileUrl)));
				}
			
		}else{
			return null;
		}
	}




	/*
	*	This will delete files form storage and cloud
	* 	@param $url Url of the file,
	*	@param $subfolder Subfolder for the file.
	*/
	public function delete($url = null,$subFolder = null)
	{

		$getImageURL = explode('/',$url);

		if ($getImageURL[2] == 'res.cloudinary.com') {

               $getPublicName = explode('.',$getImageURL[9]);
                
                $publicID = 'abdd/'.$getImageURL[8].'/'.$getPublicName[0];
                
                $test = cloudinary()->destroy($publicID);

            }else{

                // For local storage delete from here.
                $deleteStorageFile = basename($url);
                $sdfsdfsadfsd = Storage::delete('public'.$subFolder.'/'.$deleteStorageFile);
            }
	}


}