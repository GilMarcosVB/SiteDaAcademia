<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
    return view ('index');  
}

    public function sobrenos()
    {
        return view('sobre-nos');
    }

    public function login()
    {
        return view('login');
        
    }

    public function cadastro()
    {
        return view('cadastro');

    }

public function plano()
{
    return view('formulariomatricula');
    
}

}



