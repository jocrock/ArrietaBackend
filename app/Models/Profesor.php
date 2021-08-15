<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
    public $table="profesors";
    protected $fillable=[
        'user_id',
        'especialidad',
        'horasacademicas',
        'fechaingreso'
    ];
    public $timestamsp=false;
    public function user()
    {
        return $this->belongsTo('App\Models\User','user_id','id');
    }
    public function curso()
    {
        return $this->hasManny('App\Models\Curso','curso_id','id');
    }
    
}
