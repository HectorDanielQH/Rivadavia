<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Pedido;

class PedidosPendientesClientes extends Component
{
    public $pedido,$eliminar,$editar,$visualizar,$tabla=false;
    public function render()
    {
        $this->pedido=Pedido::select('cod_pedido')
                        ->selectRaw('DATE(created_at) as dato')
                        ->where('id_cliente', auth()->user()->cliente_id)
                        ->where('estado','pendiente')
                        ->groupBy('cod_pedido','dato')
                        ->get();
        return view('livewire.pedidos-pendientes-clientes');
    } 
    public function Eliminar($id)
    {
        $this->eliminar=Pedido::where('cod_pedido',$id)->delete();
        //$this->eliminar->delete();
    }   
}
