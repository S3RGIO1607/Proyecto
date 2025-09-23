<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Paquetes extends Model
{
    // Nombre de la tabla y PK
    protected $table = 'paquete';
    protected $primaryKey = 'id_paquete'; // asumiendo que existe un id_paquete como PK
    public $timestamps = false; // si la tabla no tiene created_at / updated_at

    protected $fillable = [
        'tipo_evento',
        'nombre',
        'descripcion',
        'capacidad',
        'precio',
        'id_usuario' => 'integer',
    ];

    // Casts útiles
    protected $casts = [
        'precio' => 'decimal:2',
    ];

    //Paquete fue registrado por un usuario (usa tu modelo Usuarios)
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

    // Scope para buscar por capacidad
    public function scopePorCapacidad($query, $capacidad)
    {
        return $query->where('capacidad', $capacidad);
    }
}