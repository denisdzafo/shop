<?php

namespace App\Repositories;

use App\Models\User;
use Hash;

class UserRepository 
{
	private $user;

	public function __construct(User $user)
	{
		$this->user = $user;
	}
	
	public function addUser($request)
	{
        $data = json_decode($request->getContent(), true);
        $this->user->name = $data['name'];
        $this->user->email = $data['email'];
        $this->user->password = bcrypt($data['password']);
        $this->user->user_role_id = $data['user_role_id'];
        $this->user->save();
	}

	public function getAllManagers()
	{
		return $this->user::where('user_role_id', '1')->get();
	}

	public function deleteManager($id)
	{
		$user =	$this->user::find($id);
		$user->delete();
	}
}
