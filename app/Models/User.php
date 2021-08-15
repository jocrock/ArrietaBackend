<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'ci',
        'nombres',
		'apellidos',
		'fecha_nacimiento',
        'telefono',
        'fotografia',
        'tipo',
        'genero',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function profesor()
    {
        return $this->hasOne('App\Models\Profesor','user_id','id');
    }
    public function estudiante()
    {
        return $this->hasOne('App\Models\Estudiante','user_id','id');
    }
    public function apoderado()
    {
        return $this->hasOne('App\Models\Apoderado','user_id','id');
    }
    public function administrador()
    {
        return $this->hasOne('App\Models\Administrador','user_id','id');
    }
}
