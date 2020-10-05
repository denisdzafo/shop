<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\AddUserRequest;
use App\Repositories\UserRepository;
use Illuminate\Database\QueryException;
use App\Http\Controllers\Controller;


class ManagerController extends Controller
{
	private $userRepository;

	public function __construct(UserRepository $userRepository)
	{
		$this->userRepository = $userRepository;
	}

    public function addManager(AddUserRequest $request)
    {
		try {
			$this->userRepository->addUser($request);
		} catch (QueryException $e) {
			return response()->json(['status' => 'error'], 502);
		}
		return response()->json(['status' => 'success'], 200);
    }

    public function getAllManagers()
    {
    	try {
			$data = $this->userRepository->getAllManagers();
		} catch (QueryException $e) {
			return response()->json(['status' => 'error'], 502);
		}
		return response()->json(['data' => $data], 200);
    }

    public function deleteManger($id)
    {
    	try {
			$this->userRepository->deleteManager($id);
		} catch (QueryException $e) {
			return response()->json(['status' => 'error'], 502);
		}
		return response()->json(['status' => 'success'], 200);
    }
		
}

