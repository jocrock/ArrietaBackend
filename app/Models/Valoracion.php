<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Valoracion extends Model
{
    public $table="valoracions";
    protected $fillable=[
        'nombre',
        'ponderacion'
    ];
    public $timestamsp=false;
    public function detalleCalificacionPeriodo()
    {
        return $this->hasMany('App\Models\DetalleCalificacionPeriodo','valoracion_id','id');
    }
    public function tarea()
    {
        return $this->hasMany('App\Models\Tarea','valoracion_id','id');
    }
}
