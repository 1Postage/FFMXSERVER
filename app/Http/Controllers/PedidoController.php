<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pedido;
use App\Articulo;
use App\Usuario;

class PedidoController extends Controller
{
    public function index()
    {
        $pedidos = Pedido::paginate(6);
        return view("pedido.view")->with("pedidos", $pedidos)->with("usuarios", Usuario::all());
    }

    public function detalle($id){
    	$pedido = Pedido::find($id);
    	$articulos = $pedido->articulos()->paginate(6);
    	$usuario = Usuario::find($pedido->usuario_id);
    	return view('pedido.detail')
			    	->with('pedido', $pedido)
			    	->with('articulos', $articulos)
			    	->with('usuario', $usuario);
    }
}
