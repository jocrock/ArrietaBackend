<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArchivosMaterial extends Model
{
    public $table="archivos_materials";
    protected $fillable=[
        'material_id',
        'nombre',
        'link',
        'extencion',
        'descripcion'
    ];
    public $timestamsp=false;
    
    public function material()
    {
        return $this->hasMany('App\Models\Material','material_id','id');
    }
}
