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
        return 'a';
        return view('/admin/home');
    }

    public function userHome()
    {
        return view('/usuario/home');
    }

    public function controladorHome()
    {
        return view('/controler/home');
    }

    public function adminHome()
    {
        return 'a';
        return view('/admin/home');
    }

    public function expositorHome()
    {
        return view('/expo/home');
    }
}
