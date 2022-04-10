<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Pedido extends Model
{
    use HasFactory;
    protected $fillable = [
        'cod_pedido',
        'descripcion',
        'cantidad',
        'precio_unitario',
        'confirmacion_cancelacion',
        'estado',
        'ruta_imagen',
        'id_cliente',
    ];
    public function imagenRecuperar()
    {
        return Storage::url($this->ruta_imagen);
    }
}
