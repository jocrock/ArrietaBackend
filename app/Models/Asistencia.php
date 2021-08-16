<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asistencia extends Model
{
    public $table="asistencias";
    protected $fillable=[
        'calificacion_id',
        'asistio',
        'faltas',
        'retrasos',
        'licencias',
        'dias_trabajados'
    ];
    public $timestamsp=false;
    public function calificacion()
    {
        return $this->belongsTo('App\Models\Calificacion','calificacion_id','id');
    }
    public function detalleAsistencia()
    {
        return $this->hasMany('App\Models\DetalleAsistencia','asistencia_id','id');
    }
}
