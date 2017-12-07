<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = "usuarios";
    
    protected $fillable = ['email', 'nombre', 'telefono'];
    
    protected $hidden = ['password'];
    
    public function pedidos()
    {
        return $this->hasMany('App\Pedido');
    }
}
