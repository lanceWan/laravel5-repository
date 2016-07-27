<?php
namespace App\Repositories\Eloquent;
use App\Repositories\Eloquent\Repository;
use App\User;
/**
* 仓库模式
*/
class UserRepository extends Repository
{
	
	public function model()
	{
		return User::class;
	}

	public function findBy($id)
	{
		return $this->model->where('id',$id)->first()->toArray();
	}

}