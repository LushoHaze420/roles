<?php

namespace App\Models\SA;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    //use HasFactory;

    protected $table='usuarios';
    protected $primaryKey='id';

    public $timestamps=false;

    protected $fillable=[
        'rut_Usuario',
        'nombre_Usuario',
        'apellido_Usuario',
        'email_Usuario',
        'contrasena_Usuario',
        'rol_Usuario'
        ];
}
