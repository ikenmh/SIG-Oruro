<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Navegation extends Controller
{
    public function viewHome(){
        return view("Home");
    }
}
