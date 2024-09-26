<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexControler extends Controller
{
    function index($nombre="No definido",$apellido="No definido",$numero=0){
        return view('index')
        ->with('numero',$numero)
        ->with('nombre',$nombre) 
        ->with('apellido',$apellido)
        ->with('hobbies',array('futbol','cine','viajes','videojuegos'));
        
    }
}
