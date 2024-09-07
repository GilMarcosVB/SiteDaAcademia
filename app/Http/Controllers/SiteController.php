<?php

namespace App\Http\Controllers;

use App\Models\Plano;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        $planos = Plano::all();
        return view('index', compact('planos'));
    
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



