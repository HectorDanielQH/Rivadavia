<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Producto extends Model
{
    use HasFactory;
    protected $fillable=['cod_prod','Descripcion','Precio_fabricacion','Precio_venta','id_tipo_producto','imagen'];
    public function tipoProductos()
    {
        return $this->belongsTo(TipoProducto::class,'id_tipo_producto','id');
    }
    public function imagenRecuperar()
    {
        return Storage::url($this->imagen);
    }
}
