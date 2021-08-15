<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EntregaTarea extends Model
{
    public $table="entrega_tareas";
    protected $fillable=[
        'detalle_calificacion_periodo_id',
        'tarea_id',
        'fecha_entrega',
        'titulo',
        'descripcion',
        'puntaje',
        'estado'
    ];
    public $timestamsp=false;
    public function detalleCalificacionPeriodo()
    {
        return $this->belongsTo('App\Models\DetalleCalificacionPeriodo','detalle_calificacion_periodo_id','id');
    }
    public function tarea()
    {
        return $this->belongsTo('App\Models\Tarea','tarea_id','id');
    }
    public function archivoAdjuntoEntregaTarea()
    {
        return $this->hasManny('App\Models\ArchivoAdjuntoEntregaTarea','entrega_tarea_id','id');
    }
}
