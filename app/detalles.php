<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class detalles extends Model
{
    protected $table = 'detalles';
    
    protected $fillable = [
        'producto_id',
        'detalles'
    ];

    public function producto()
    {
        return $this->belongsTo('App\Models\Producto');
    }
}
