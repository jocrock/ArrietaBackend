<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PeriodoCalificacion extends Model
{
    public $table="periodo_calificacions";
    protected $fillable=[
        'calificacion_id',
        'periodo_id',
        'detalle',
        'puntaje'
    ];
    public $timestamsp=false;
    
    public function periodo()
    {
        return $this->belongsTo('App\Models\Periodo','periodo_id','id');
    }
    public function calificacion()
    {
        return $this->belongsTo('App\Models\Calificacion','calificacion_id','id');
    }
    public function detalleCalificacionPeriodo()
    {
        return $this->hasMany('App\Models\DetalleCalificacionPeriodo','periodo_calificacion_id','id');
    }
}
