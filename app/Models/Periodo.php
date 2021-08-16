<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Periodo extends Model
{
    public $table="periodos";
    protected $fillable=[
        'nombre',
        'descripcion',
        'fechainicio',
        'fechafin',
        'gestion'
    ];
    public $timestamsp=false;
    
    public function periodoCalificacion()
    {
        return $this->hasMany('App\Models\PeriodoCalificacion','periodo_id','id');
    }

    
}
