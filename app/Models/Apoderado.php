<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apoderado extends Model
{
    public $table="apoderados";
    protected $fillable=[
        'direccion', 		
        'user_id'
    ];
    public $timestamsp=false;
    public function user()
    {
        return $this->belongsTo('App\Models\User','user_id','id');
    }
    public function estudiante()
    {
        return $this->hasManny('App\Models\Estudiante','apoderado_id','id');
    }
}
