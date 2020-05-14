<?php

namespace App\Http\Controllers;

use App\Categoria;
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
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $categorias = Categoria::all();
        if(\Auth::check()){
            if(\Auth::user()->isAdmin()){
                return view('home_admin');
            }else{
                
                return view('home',compact('categorias'));
            }
        }else{
            return view('home',compact('categorias'));
        }
        
    }
}
