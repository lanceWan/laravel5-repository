<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = factory(App\User::class)->create([
	    	'email' => 'iwanli@126.com',
	    	'password' => bcrypt('123456'),
	   	]);

	   	$user = factory(App\User::class,3)->create([
	    	'password' => bcrypt('123456'),
	   	]);
    }
}
