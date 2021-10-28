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
        return view('index');
    }
    public function admin()
    {
        return'Yeahhh autenticado como admin';
    }
    public function funcionario()
    {
        return'Yeahhh autenticado como funcionario';
    }
    public function hospede()
    {
        return'Yeahhh autenticado como hospede';
    }
}
