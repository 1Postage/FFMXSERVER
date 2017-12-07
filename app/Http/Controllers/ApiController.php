<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;
use Carbon\Carbon;  
use App\Pedido;
use Illuminate\Support\Facades\DB;
use App\Articulo;

class ApiController extends Controller
{
    //

    public function loginReq(Request $request)
    {
        $email = $request['email'];
        $pass = $request['pass'];

        if(Usuario::where('email', $email)->where('password', $pass)->first())
        {
            return "LOGGED&" . Usuario::where('email', $email)->where('password', $pass)->first()->nombre;      
        }
            return "UoPERR";
        
    }

    

    public function viewPedido()
    {
        $pedidos = Pedido::paginate(6);
        return view("pedido.view")->with("pedidos", $pedidos)->with("usuarios", Usuario::all());
    }

    public function newPedido(){
        return view ("pedido.newPedido");
    }

    public function storePedido(Request $request){
        


        $email = $request['email'];
        $pass = $request['password'];

        
        $user = Usuario::where('email', $email)->where('password', $pass)->first();

        if($user!=null)
        {

            
            


            
            try{

                $pedido = new Pedido;
                $pedido->usuario_id = $user["id"];
                $pedido->status = 0;
                $pedido->fecha = new Carbon();
                $pedido->lugar_entrega = "NARNIA";
                $pedido->save();

                $arr = $request["pedido"];
                foreach($arr as $item) { 
                    
                    $articulo = new Articulo;
                    $articulo->nombre = $item['articulo'];
                    $articulo->usuario_id = $user["id"];
                    $articulo->cantidad = intval($item['cantidad']) ;
                    $articulo->precio = $item['precio'];
                    $articulo->precioU = $item['preciou'];
                    $articulo->descripcion = "...";

                    
                    $articulo->save();
                    $pedido->articulos()->attach($articulo);
                }
            } catch (Exception $e) {
                return $e->getMessage();
            }

            return "ok";
            

        }


    }

    public function updatePedido(Request $request)
    {

        $pedido = Pedido::findOrFail($request['id']);
        $pedido->status = 1;
        $pedido->save();
        return ["msg" => "ok", "id"=>$request['id'], "pedido" => $pedido];   
    }



    public function pedidoByid(Request $request)
    {
        
    }
}
