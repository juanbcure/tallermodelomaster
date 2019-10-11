<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class cliente extends Model
{
    protected $table = 'cliente';
    
    protected $fillable = [
        'nombre',
        'direccion',
        'telefono'
    ];

    public function producto()
    {
        return $this->hasMany('App\Models\Producto');
    }

    public function detalles()
    {
        return $this->hasManyThrough('App\Models\detalles', 'App\Models\Producto');
    }
}
