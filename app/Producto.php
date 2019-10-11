<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'producto';
    
    protected $fillable = [
        'descripcion',
        'precio',
        'proveedor_id',
        'categoria'
    ];

    public function provedor()
    {
        return $this->belongsToMany('App\Models\provedor','venta','producto_id','provedor_id')->withTimestamps();
    }

    public function cliente()
    {
        return $this->belongsTo('App\Models\Provedor');
    }

    public function detalles()
    {
        return $this->hasMany('App\Models\detalles');
    }
}
