<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calificacion extends Model
{
    public $table="calificacions";
    protected $fillable=[
        'curso_id',
        'estudiante_id',
        'rango',
        'puntaje',
        'situacion'
    ];
    public $timestamsp=false;
    public function estudiante()
    {
        return $this->belongsTo('App\Models\Estudiante','estudiante_id','id');
    }
    public function curso()
    {
        return $this->belongsTo('App\Models\Curso','curso_id','id');
    }
    public function asistencia()
    {
        return $this->hasOne('App\Models\Asistencia','calificacion_id','id');
    }
}
