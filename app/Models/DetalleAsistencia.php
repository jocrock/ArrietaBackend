<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleAsistencia extends Model
{
    public $table="detalle_asistencias";
    protected $fillable=[
        'asistencia_id',
        'fecha',
        'detalle',
        'puntaje'
    ];
    public $timestamsp=false;
    public function asistencia()
    {
        return $this->belongsTo('App\Models\Asistencia','asistencia_id','id');
    }
    public function justificacion()
    {
        return $this->hasOne('App\Models\Justificacion','detalle_asistencia_id','id');
    }
}
