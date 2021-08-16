<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleCalificacionPeriodo extends Model
{
    public $table="detalle_calificacion_periodos";
    protected $fillable=[
        'periodo_calificacion_id',
        'valoracion_id',
        'puntaje'
    ];
    public $timestamsp=false;
    public function periodoCalificacion()
    {
        return $this->belongsTo('App\Models\PeriodoCalificacion','periodo_calificacion_id','id');
    }
    public function valoracion()
    {
        return $this->belongsTo('App\Models\Valoracion','valoracion_id','id');
    }
    public function entregaTarea()
    {
        return $this->hasMany('App\Models\EntregaTarea','detalle_calificacion_periodo_id','id');
    }
}
