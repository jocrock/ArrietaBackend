<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    public $table="cursos";
    protected $fillable=[
        'materia_id',
        'profesor_id',
        'paralelo',
        'gestion'
    ];
    public $timestamsp=false;
    
    public function profesor()
    {
        return $this->belongsTo('App\Models\Profesor','curso_id','id');
    }
    public function calificacion()
    {
        return $this->hasManny('App\Models\Calificacion','curso_id','id');
    }
    public function materia()
    {
        return $this->belongsTo('App\Models\Materia','materia_id','id');
    }
    public function tema()
    {
        return $this->hasManny('App\Models\Tema','curso_id','id');
    }
    public function material()
    {
        return $this->hasManny('App\Models\Material','curso_id','id');
    }
    public function tarea()
    {
        return $this->hasManny('App\Models\Tarea','curso_id','id');
    }
}
