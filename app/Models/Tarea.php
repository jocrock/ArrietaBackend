<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarea extends Model
{
    public $table="tareas";
    protected $fillable=[
        'curso_id',
        'valoracion_id',
        'titulo',
        'descripcion',
        'fecha_publicacion',
        'fecha_entrega'
    ];
    public $timestamsp=false;
    public function curso()
    {
        return $this->belongsTo('App\Models\Curso','curso_id','id');
    }
    public function valoracion()
    {
        return $this->belongsTo('App\Models\Valoracion','valoracion_id','id');
    }
    public function entregaTarea()
    {
        return $this->hasManny('App\Models\EntregaTarea','tarea_id','id');
    }
}
