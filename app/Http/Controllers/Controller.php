<?php

namespace App\Http\Controllers;

abstract class Controller
{

    public function plano(){
        return view('admin.index');
    }
}
