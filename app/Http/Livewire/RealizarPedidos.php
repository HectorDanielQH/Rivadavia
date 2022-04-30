<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Pedido;
use Livewire\WithFileUploads;

class RealizarPedidos extends Component
{   
    use WithFileUploads;


    public $abrir=false,$anadir;
    public $pedido,$numero_pedido=null;
    public $descripcion,$cantidad,$imagen,$id_item;
    public function render()
    {
        $this->pedido = Pedido::all()->where('id_cliente',auth()->user()->cliente_id)
                                    ->where('cod_pedido',$this->numero_pedido);
        return view('livewire.realizar-pedidos');
    }
    public function AbrirFormulario(){
        $this->abrir=true;
        $this->anadir=true;
    } 
    public function CerrarFormulario(){
        $this->abrir=false;
        $this->limpiarDatos();
    }
    public function LimpiarDatos()
    {
        $this->descripcion='';
        $this->cantidad='';
        $this->imagen='';
    }
    public function GuardarPedido()
    {
        $this->validate([
            'descripcion'=>'required',
            'cantidad'=>'required',
            'imagen'=>'required',
        ]);

        $path=$this->imagen->store('public');
        if($this->numero_pedido==null){
            if(Pedido::all()->count()==0){
                $this->numero_pedido=1;
            }
            else{
                $this->numero_pedido=Pedido::max('cod_pedido')+1;
            }
        }
        Pedido::updateOrCreate(['id'=>$this->id_item],[
            'cod_pedido'=>$this->numero_pedido,
            'descripcion'=>$this->descripcion,
            'cantidad'=>$this->cantidad,
            'ruta_imagen'=>$path,
            'id_cliente'=>auth()->user()->cliente_id,
        ]);
        $this->LimpiarDatos();
        $this->CerrarFormulario();
    }

    public function borrarItem($id)
    {
        Pedido::find($id)->delete();
        if(Pedido::where('cod_pedido',$this->numero_pedido)->count()==0)
        {
            redirect('/RealizarPedidos');
        }
    }
    public function editarItem($id){
        $this->descripcion=Pedido::find($id)->descripcion;
        $this->cantidad=Pedido::find($id)->cantidad;
        $this->imagen=Pedido::find($id)->ruta_imagen;
        $this->id_item=$id;
        $this->abrir=true;
    }
    public function Recargar(){
        redirect('/RealizarPedidos');
    }
    public function EliminarTodo(){
        Pedido::where('cod_pedido',$this->numero_pedido)->delete();
        redirect('/RealizarPedidos');
    }
}
