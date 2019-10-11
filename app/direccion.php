<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class direccion extends Model
{
    protected $table = 'direccion';
    
    protected $fillable = [
        'ubicacion',
        'barrio',
        'ciudad',
        'provedor_id'
    ];

    public function cliente()
    {
        return $this->belongsTo('App\Models\provedor');
    }
}
