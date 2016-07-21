<?php
namespace App\Repositories\Eloquent;
use App\Repositories\Contracts\UserInterface;
use App\User;
/**
* 门面模式
*/
class UserFacadeRepository implements UserInterface
{
	
	public function allUsers()
	{
		return User::all()->toArray();
	}
}