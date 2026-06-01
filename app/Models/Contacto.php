<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contactos extends Model
{
    //
     public $timestamps = false;
        public function proovedor()
    {
        return $this->belongsTo(Proovedor::class, 'id_proovedor');
    }
}
