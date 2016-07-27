<?php
namespace App\Repositories\Eloquent;
use App\Repositories\Contracts\UserInterface;
use App\User;
/**
* 门面模式
*/
class UserFacadeRepository implements UserInterface
{
	/**
	 * 根据id查找用户信息
	 * @author 晚黎
	 * @date   2016-07-25
	 * @param  [type]     $id [description]
	 * @return [type]         [description]
	 */
	public function findBy($id)
	{
		return User::find($id);
	}
}