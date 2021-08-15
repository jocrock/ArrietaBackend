<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Justificacion extends Model
{
    public $table="justificacions";
    protected $fillable=[
        'detalle_asistencia_id',
        'nombre',
        'descripcion',
        'link'
    ];
    public $timestamsp=false;
    public function detalleAsistencia()
    {
        return $this->belongsTo('App\Models\DetalleAsistencia','detalle_asistencia_id','id');
    }
}
