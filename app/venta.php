<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    protected $table = 'venta';
    
    protected $fillable = [
        'cliente_id',
        'producto_id'
    ];


    public function provedor()
    {
        return $this->belongsTo('App\Models\cliente');
    }

    public function producto()
    {
        return $this->belongsTo('App\Models\Producto');
    }
}
