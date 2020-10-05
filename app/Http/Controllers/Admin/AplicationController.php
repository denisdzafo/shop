<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\AplicationRepository;
use App\Http\Requests\AplicationRequest;
use App\Http\Requests\LogoRequest;
use App\Http\Requests\ContactInfoRequest;

class AplicationController extends Controller
{
	private $aplicationRepository;

	public function __construct(AplicationRepository $aplicationRepository)
	{
		$this->aplicationRepository = $aplicationRepository;
	}

    public function addData(AplicationRequest $request)
    {
    	try {
			$this->aplicationRepository->addData($request);
		} catch (QueryException $e) {
			return response()->json(['status' => 'error'], 502);
		}
		return response()->json(['status' => 'success'], 200);
    }

    public function contactInfo(ContactInfoRequest $request)
    {
    	try {
			$this->aplicationRepository->addContactInfo($request);
		} catch (QueryException $e) {
			return response()->json(['status' => 'error'], 502);
		}
		return response()->json(['status' => 'success'], 200);
    }

}
