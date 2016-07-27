<?php
namespace App\Http\Controllers;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Repositories\Contracts\UserInterface;
use UserRepository;
use App\Repositories\Eloquent\UserRepository as UserRepo;
class HomeController extends Controller
{
    private $user;

    private $userRepo;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(UserInterface $user,UserRepo $userRepo)
    {
        $this->user = $user;
        $this->userRepo = $userRepo;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd($this->user->findBy(1)->toArray());
        // 
        // dd(UserRepository::findBy(1)->toArray());
        dd($this->userRepo->findBy(2));
        return view('home');
    }
}
