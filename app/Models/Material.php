<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    public $table="materials";
    protected $fillable=[
        'curso_id',
        'tema_id',
        'titulo',
        'descripcion',
        'fechapublicacion'
    ];
    public $timestamsp=false;
    public function curso()
    {
        return $this->belongsTo('App\Models\Curso','curso_id','id');
    }
    public function tema()
    {
        return $this->belongsTo('App\Models\Tema','tema_id','id');
    }
    public function archivosMaterial()
    {
        return $this->hasManny('App\Models\ArchivosMaterial','material_id','id');
    }
}
