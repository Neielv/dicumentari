<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estanteria extends Model
{
    use HasFactory;
    protected $fillable=['nombre','descripcion','ciudad_id','largo','alto','profundidad'];
    protected $table = 'estanterias';

    public function cajas()
    {
        return $this->belongsTo('App\Models\caja');
    }
    public function ciudad()
    {
        return $this->belongsTo('App\Models\ciudad');
    }
}
