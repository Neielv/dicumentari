<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Caja extends Model
{
    use HasFactory;
    protected $fillable=['nombre','decripcion','ubicacion_x','ubicacion_y','ubicacion_z','estanteria_id'];
    protected $table = 'estanteias';

    public function estanteria()
    {
        return $this->belongsTo('App\Models\estanteria');
    }
}
