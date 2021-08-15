<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    public $table="materias";
    protected $fillable=[
        'area', 
        'descripcion', 
        'nivel',
        'escolaridad'
    ];
    public $timestamsp=false;
    public function curso()
    {
        return $this->belongsTo('App\Models\Curso','materia_id','id');
    }
}
