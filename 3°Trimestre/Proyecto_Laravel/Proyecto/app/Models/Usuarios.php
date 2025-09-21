<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Usuarios extends Authenticatable
{
    use Notifiable;

    protected $table = 'usuario'; // 👈 ojo: pon en minúscula si en la DB está así
    protected $primaryKey = 'id_usuario';
    public $timestamps = false; // si tu tabla no tiene created_at / updated_at

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
        'estado',
        'registrado_por',
    ];

    protected $hidden = [
        'contrasena',
    ];

    // 👇 Esto hace que Laravel use tu campo "contrasena" en lugar de "password"
    public function getAuthPassword()
    {
        return $this->contrasena;
    }

    public function registradoPor()
{
    return $this->belongsTo(Usuarios::class, 'registrado_por', 'id_usuario');
}
}
