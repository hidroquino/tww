<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
//clase para consumir el API
use Illuminate\Support\Facades\Http;

class LandingPage extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
        $usuarios = HTTP::get('https://jsonplaceholder.typicode.com/users');
        $usuariosArray = $usuarios->json();

        return view('landing', compact('usuariosArray'));
    }
}
