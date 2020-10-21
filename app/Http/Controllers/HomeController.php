<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return \view('home.index');
    }
    public function signin()
    {
        return \view('home.login');
    }
    public function game()
    {
        $mss = "Please select a number type and press Play.\n";
        return \view('home.game')->with('mss', $mss);;
    }
}
