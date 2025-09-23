<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Servicios extends Model
{
    // Nombre de la tabla y PK
    protected $table = 'servicio';
    protected $primaryKey = 'id_servicio'; // clave primaria
    public $timestamps = false; // si la tabla no tiene created_at / updated_at

    // Campos que se pueden asignar masivamente
    protected $fillable = [
        'nombre',
        'descripcion',
        'precio',
        'id_usuario' => 'integer',
    ];

    // Casts útiles
    protected $casts = [
        'precio' => 'decimal:2',
    ];

    //Servicio fue registrado por un usuario (usa tu modelo Usuarios)
    public function registradoPor()
    {
        return $this->belongsTo(Usuarios::class, 'id_usuario', 'id_usuario');
    }

    /* -------------------
       Helpers / Scopes
       ------------------- */

    // Formatea precio para mostrar en vistas
    public function precioFormato(): string
    {
        return number_format($this->precio, 2, ',', '.');
    }

    
}