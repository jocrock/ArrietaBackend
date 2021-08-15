<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArchivoAdjuntoTarea extends Model
{
    public $table="archivo_adjunto_tareas";
    protected $fillable=[
       'tarea_id',
       'fecha_creacion',
       'nombre',
       'link',
       'extencion',
       'caracteristicas'
    ];
    public $timestamsp=false;

    public function Tarea()
    {
        return $this->belongsTo('App\Models\Tarea','tarea_id','id');
    }
}
