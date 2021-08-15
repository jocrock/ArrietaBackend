<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    public $table="estudiantes";
    protected $fillable=[
        'rude',	
        'estado',		
        'user_id',
		'apoderado_id'
    ];
    public $timestamsp=false;
    public function user()
    {
        return $this->belongsTo('App\Models\User','user_id','id');
    }
    public function apoderado()
    {
        return $this->belongsTo('App\Models\Apoderado','apoderado_id','id');
    }
    public function calificacion()
    {
        return $this->hasManny('App\Models\Calificacion','estudiante_id','id');
    }
}
