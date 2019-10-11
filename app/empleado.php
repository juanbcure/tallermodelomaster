<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class empleado extends Model
{
    protected $table = 'empleado';
    
    protected $fillable = [
        'fecha',
        'cliente_id'
    ];

    public function cliente()
    {
        return $this->belongsTo('App\Models\Cliente');
    }

    public function producto()
    {
        return $this->belongsToMany('App\Models\Producto','venta','provedor_id','producto_id')->withTimestamps();
    }
}