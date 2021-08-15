<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Administrador extends Model
{
    public $table="administradors";
    protected $fillable=[
        'user_id',
        'cargo', 
		'fechaingreso'
    ];
    public $timestamsp=false;
    public function user()
    {
        return $this->belongsTo('App\Models\User','user_id','id');
    }
}
