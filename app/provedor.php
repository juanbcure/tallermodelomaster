<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class provedor extends Model
{
    protected $table = 'provedor';
    
    protected $fillable = [
        'nombre',
        'telefono'
    ];

    public function provedor()
    {
        return $this->hasMany('App\Models\empleado');
    }

    public function direccion()
    {
        return $this->hasOne('App\Models\detalles');
    }
}
