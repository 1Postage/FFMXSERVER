<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $table = "pedidos";
    
    protected $fillable = ['lugar_entrega', 'fecha', 'usuario_id'];
    
    public function articulos()
    {
        return $this->belongsToMany('App\Articulo')->withTimestamps();
    }
}
