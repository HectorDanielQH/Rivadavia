<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Producto;
use App\Models\TipoProducto;

class ProductoCliente extends Component
{
    public $productos,$tipos;
    public function render()
    {
        $this->productos = Producto::all();
        $this->tipos=TipoProducto::all();
        return view('livewire.producto-cliente');
    }
}
