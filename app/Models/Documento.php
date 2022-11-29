<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Documento extends Model
{
    use HasFactory;
    protected $fillable=['tipo_id','numero','fecha','nombre','resumen','unidad_id','proceso_id','carpeta','caja_id','url'];
}