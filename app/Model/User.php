<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{


	protected $table = 'users';
	protected $fillable = ['id', 'name', 'email', 'created_at'];

	public function getUser()
	{
		$users = User::latest('created_at')->all()->get();
		dd($users);
		return $users;
	}

}