<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Articulo;
use App\Usuario;

class ArticulosController extends Controller
{
    public function index()
    {

    	return view('articulo.view')->with('articulos', Articulo::paginate(6))->with('usuarios', Usuario::all());
    }
}
