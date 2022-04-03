<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Producto;
use App\Models\TipoProducto;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class Productos extends Component
{
    use WithFileUploads;

    public $productos,$descripcion,$codigo_prod,$precio_fab,$precio_venta,$imagen,$id_producto,$hab_up;
    public $tipoproductos,$id_tipo_producto,$descripicion_tipo;
    public $modal=0;
    public function render()
    {
        $this->tipoproductos = TipoProducto::all();
        $this->productos =Producto::all();
        return view('livewire.productos');
    }
    public function create_product($id)
    {
        $this->limpiarCampos();
        $this->abrirModal();
        $this->id_tipo_producto=TipoProducto::find($id)->id;
        $this->descripicion_tipo=TipoProducto::find($id)->descripcion;
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
        $this->id_tipo_producto='';
        $this->productos='';
        $this->descripcion='';
        $this->codigo_prod='';
        $this->precio_fab='';
        $this->precio_venta='';
        $this->imagen='';
        $this->id_producto='';
        $this->hab_up='';
    }
    public function editar($id)
    {
        $this->id_producto=$id;
        $this->descripcion=Producto::find($id)->Descripcion;
        $this->descripicion_tipo=Producto::find($id)->tipoProductos->descripcion;
        $this->id_tipo_producto=Producto::find($id)->id_tipo_producto;
        $this->codigo_prod=Producto::find($id)->cod_prod;
        $this->precio_fab=Producto::find($id)->Precio_fabricacion;
        $this->precio_venta=Producto::find($id)->Precio_venta;
        $this->imagen= Producto::find($id)->imagenRecuperar();
        $this->hab_up=true;
        $this->abrirModal();
    }
    public function eliminar($id)
    {
        if(Storage::exists(Producto::find($id)->imagen)){
            Storage::delete(Producto::find($id)->imagen);
            Producto::find($id)->delete();
            session()->flash('mensaje','Se elimino el producto');   
        }
        else{
            Producto::find($id)->delete();
            session()->flash('mensaje','Esta Categoria se elimino correctamente');
        }
    }
    public function guardar()
    {

        if(Producto::find($this->id_producto)){
            Storage::delete(Producto::find($this->id_producto)->imagen);
            $path=$this->imagen->store('public');
            Producto::updateOrCreate(['id'=>$this->id_producto],[
                'cod_prod'=>$this->codigo_prod,
                'Descripcion'=>$this->descripcion,
                'Precio_fabricacion'=>$this->precio_fab,
                'Precio_venta'=>$this->precio_venta,
                'id_tipo_producto'=>$this->id_tipo_producto,
                'imagen'=>$path
            ]);
            session()->flash('mensaje','Se registro correctamente el producto');  
        }
        else{
            $path=$this->imagen->store('public');
            Producto::updateOrCreate(['id'=>$this->id_producto],[
                'cod_prod'=>$this->codigo_prod,
                'Descripcion'=>$this->descripcion,
                'Precio_fabricacion'=>$this->precio_fab,
                'Precio_venta'=>$this->precio_venta,
                'id_tipo_producto'=>$this->id_tipo_producto,
                'imagen'=>$path
            ]);
            session()->flash('mensaje','Se registro correctamente el producto');  
        }
        $this->limpiarCampos();
        $this->cerrarModal();
        //session()->flash('message','Producto creado correctamente');
    }
}
