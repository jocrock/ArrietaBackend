<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tema extends Model
{
    public $table="temas";
    protected $fillable=[
        'curso_id',
        'titulo',
        'descripcion'
    ];
    public $timestamsp=false;
    public function curso()
    {
        return $this->belongsTo('App\Models\Curso','curso_id','id');
    }
    public function material()
    {
        return $this->hasManny('App\Models\Material','tema_id','id');
    }
}
