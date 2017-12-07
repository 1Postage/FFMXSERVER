<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;
use App\Pedido;

class UsuarioController extends Controller
{
    public function index()
    {
        return view('usuario.listView')->with('usuarios', Usuario::all());
    }

    public function nuevoUsuario()
    {
        return view('usuario.register');
    }

    public function storeUsuario(Request $request)
    {
        $usuario = new Usuario;
        $usuario->email = $request['email'];
        $usuario->password = $request['pass'];
        $usuario->nombre = $request['nombre'];
        $usuario->telefono = $request['telefono'];
        $usuario->save();
        return redirect('/registerUsuario');
    }

    public function getUsuario($id){
    	$usuario = Usuario::find($id);
		$pedidos = Pedido::where('usuario_id', $usuario->id)->paginate(5);
    	return view('usuario.view')->with('usuario', $usuario)->with('pedidos', $pedidos);
    }

}
