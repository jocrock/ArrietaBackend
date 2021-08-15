<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArchivoAdjuntoEntregaTarea extends Model
{
    public $table="archivo_adjunto_entrega_tareas";
    protected $fillable=[
        'entrega_tarea_id',
        'nombre',
        'link',
        'extencion',
        'caracteristicas',
        'fecha_creacion'
    ];
    public $timestamsp=false;

    public function entregaTarea()
    {
        return $this->belongsTo('App\Models\EntregaTarea','entrega_tarea_id','id');
    }
}
