<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Repositories\Contracts\UserInterface;
use UserFacadeRepo;
class HomeController extends Controller
{

    private $user;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(UserInterface $user)
    {
        // $this->middleware('auth');
        $this->user = $user;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd($this->user->allUsers());
        
        dd(UserFacadeRepo::allUsers());
        return view('home');
    }
}
