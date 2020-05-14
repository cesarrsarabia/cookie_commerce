<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    public function index()
    {
        $users =  User::all();
        
        //dd($tareas);
        return view('usuarios.userIndex', compact('users'));
    }

    public function show(User $user)
    {
        //
       
        return view('usuarios.userShow',compact('user'));
    }
}
