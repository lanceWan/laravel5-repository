<?php
namespace App\Repositories\Contracts;
interface UserInterface{

	/**
	 * 根据Id查找用户
	 * @author 晚黎
	 * @date   2016-07-22
	 * @param  [type]     $id [description]
	 * @return [type]         [description]
	 */
	public function findBy($id);

}