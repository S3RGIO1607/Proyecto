<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    protected $table = 'Usuarios';
    protected $primaryKey = 'id_usuario';

    protected $fillable = [
        'numero_documento',
        'nombre',
        'correo',
        'contrasena',
        'direccion',
        'telefono',
        'nivel_educativo',
        'referencia_personal',
        'telefono_referencia_personal',
        'eps',
        'tipo_usuario',
        'estado'
    ];
}
