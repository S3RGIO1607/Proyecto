<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\UploadedFile;

class Productos extends Model
{
    // Nombre de la tabla y PK según tu migración
    protected $table = 'producto';
    protected $primaryKey = 'id_producto';
    // Tu tabla no tiene created_at/updated_at
    public $timestamps = false;

    // Si usas incrementos BIGINT por defecto está bien (bigIncrements)
    // protected $keyType = 'int';  
    // public $incrementing = true;

    protected $fillable = [
        'nombre_producto',
        'existencia',
        'descripcion',
        'precio_compra',
        'precio_alquiler',
        'fecha_entrada',
        'fecha_salida',
        'imagen',
        'id_usuario',
    ];

    // Casts útiles
    protected $casts = [
        'existencia' => 'integer',
        'precio_compra' => 'decimal:2',
        'precio_alquiler' => 'decimal:2',
        'fecha_entrada' => 'date',
        'fecha_salida' => 'date',
        'id_usuario' => 'integer',
    ];

    /* -------------------
       Relaciones
       ------------------- */

    // Producto fue registrado por un usuario (usa tu modelo Usuarios)
    public function registradoPor()
    {
        return $this->belongsTo(Usuarios::class, 'id_usuario', 'id_usuario');
    }

    /* -------------------
       Accessors / Mutators para imagen (BLOB)
       ------------------- */

    /**
     * Si quieres obtener la imagen como base64 para mostrar en <img src="...">
     * uso: <img src="{{ $producto->imagen_base64 }}" />
     */
    public function getImagenBase64Attribute(): ?string
    {
        if (empty($this->attributes['imagen'])) {
            return null;
        }

        // No conocemos el tipo MIME almacenado; asumimos jpeg por defecto.
        // Si guardas el mime en otra columna, úsa esa información aquí.
        $base64 = base64_encode($this->attributes['imagen']);
        return "data:image/jpeg;base64,{$base64}";
    }

    /**
     * Mutator para asignar la imagen desde un UploadedFile o desde contenido binario.
     * Ejemplo: $producto->imagen = $request->file('imagen');
     * o $producto->imagen = file_get_contents($ruta);
     */
    public function setImagenAttribute($value): void
    {
        if ($value instanceof UploadedFile) {
            $this->attributes['imagen'] = file_get_contents($value->getRealPath());
        } elseif (is_string($value) && file_exists($value)) {
            // si le pasas una ruta al archivo
            $this->attributes['imagen'] = file_get_contents($value);
        } else {
            // si te pasan directamente el binario
            $this->attributes['imagen'] = $value;
        }
    }

    /* -------------------
       Scopes y helpers útiles
       ------------------- */

    // scope para productos disponibles (ejemplo según existencia)
    public function scopeDisponibles($query)
    {
        return $query->where('existencia', '>', 0)->where('fecha_salida', '>=', now());
    }

    // formatea precio para mostrar en vistas
    public function precioAlquilerFormato(): string
    {
        return number_format($this->precio_alquiler, 2, ',', '.');
    }
}