<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\TipoProducto;

class TipoProductos extends Component
{
    public $tipoProductos,$descripcion,$id_producto;
    public $modal=0;
    public function render()
    {
        $this->tipoProductos = TipoProducto::all();
        return view('livewire.tipo-productos');
    }
    public function create_product()
    {
        $this->limpiarCampos();
        $this->abrirModal();
    }
    public function abrirModal()
    {
        $this->modal=true;
    }
    public function cerrarModal()
    {
        $this->modal=false;
    }
    public function limpiarCampos()
    {
        $this->descripcion='';
        $this->id_producto='';
    }
    public function editar($id)
    {
        $this->descripcion=TipoProducto::find($id)->descripcion;
        $this->id_producto=$id;
        $this->abrirModal();
    }
    public function eliminar($id)
    {
        TipoProducto::find($id)->delete();
        session()->flash('message','Esta Categoria se elimino correctamente');
    }
    public function guardar()
    {
        TipoProducto::updateOrCreate(['id'=>$this->id_producto],
            [
                'descripcion'=>$this->descripcion
            ]
        );
        session()->flash('message',
            $this->id_producto ? 'Esta Categoria se editó correctamente' : 'Esta Categoria se creó correctamente');
        $this->cerrarModal();
        $this->limpiarCampos();
    }
}
