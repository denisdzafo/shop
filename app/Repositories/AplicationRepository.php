<?php

namespace App\Repositories;

use App\Models\Aplication;
use App\Models\ContactInfo;
use Hash;

class AplicationRepository 
{
	private $aplication;

	private $contactInfo;

	public function __construct(Aplication $aplication, ContactInfo $contactInfo)
	{
		$this->aplication = $aplication;
		$this->contactInfo = $contactInfo;
	}
	
	public function addData($request)
	{
        $data = json_decode($request->getContent(), true);
        $this->aplication->name = $data['name'];
        $this->aplication->description = $data['description'];
        if($request->file('logo')){        	
        	$path = $request->file('logo')->store('logo');
        	$this->aplication->logo_path = $path;
        }
        
        $this->aplication->save();
	}

	public function addContactInfo($request)
	{
		$data = json_decode($request->getContent(), true);
        $this->contactInfo->address = $data['address'];
        $this->contactInfo->city = $data['city'];
        $this->contactInfo->country = $data['country'];
        $this->contactInfo->email = $data['email'];        
        $this->contactInfo->save();
	}
}
