<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /*Página principal de la aplicación*/
    public function getHome(){
        return view ('home');
    }
}
