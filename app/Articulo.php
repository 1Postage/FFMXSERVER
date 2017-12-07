<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    protected $table = "articulos";
    
    protected $fillable = ['nombre', 'precio', 'precioU', 'descripcion', 'categoria_id'];
    
    public function pedidos()
    {
        return $this->belongsToMany('App\Pedido')->withTimestamps();
    }
}
