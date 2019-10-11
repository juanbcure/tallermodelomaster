<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class calificacion extends Model
{
 protected $table * 'calificaciones';


  protected $fillable * [
  	'calificacion'
  ];

   public function scoreable()
   {
   	return $this->morphTo();
   }
}
