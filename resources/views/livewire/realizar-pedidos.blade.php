<div class="container-fluid pt-3">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@if ($abrir)
    @include('livewire.PedidosCliente.create')
@else
    @if($numero_pedido==null)
        <script>
            swal({
                title: "FACILITAMOS TUS PEDIDOS",
                text: "Simplemente ingresa tus pedidos y si se pierde por algun motivo se auto recupera",
                icon: "success",
                button: "Ok",
            });
        </script>
    @endif
    <div class="alert alert-success" role="alert">
        <h4 class="alert-heading">Recordatorio</h4>
            <p>Tus pedidos realizados y/o perdidos se autoguardaran y/o guardan en pedidos pendientes ya tu decides si deseas cancelar el pedido o simplemente editarlos</p>
        <hr>
        <p class="mb-0">Solo ingresa los pedidos que solicitas.</p>
    </div>
        <div class="container d-flex justify-between pt-4">
            <button class="btn btn-success" wire:click="AbrirFormulario()">
                <i class="fas fa-check"></i>
                Agregar Pedido
            </button>
            @if($numero_pedido==null)
                <button class="btn btn-primary" disabled>
                    <i class="fas fa-shopping-cart"></i>
                    Enviar Pedido
                </button>
                <button class="btn btn-danger" disabled>
                    <i class="fas fa-trash"></i>
                    Cancelar Pedido
                </button>
            @else
                <button class="btn btn-primary" wire:click="Recargar()">
                    <i class="fas fa-shopping-cart"></i>
                    Enviar Pedido
                </button>
                <button class="btn btn-danger" onclick="cancelar()" wire:click="EliminarTodo()">
                    <i class="fas fa-trash"></i>
                    Cancelar Pedido
                </button>
            @endif

        </div>
        <div class="container mt-4">
            <table class="table table-dark table-bordered">
                <thead>
                    <tr>
                        <th>Opcion</th>
                        <th>Item</th>
                        <th>Descripcion</th>
                        <th>imagen</th>
                        <th>Cantidad</th>
                        <th>Precio Unitario</th>
                        <th>Subtotal</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($pedido as $item)
                        <tr>
                            <td>
                                <button class="btn btn-danger" wire:click="borrarItem({{$item->id}})" >
                                    <i class="fas fa-trash"></i>
                                </button>
                                <button class="btn btn-warning ml-3" wire:click="editarItem({{$item->id}})">
                                    <i class="fas fa-edit"></i>
                                </button>
                            </td>
                            <td>
                                {{ $item->cod_pedido }}
                            </td>
                            <td>
                                {{ $item->descripcion }}
                            </td>
                            <td>
                                <img src="{{ $item->imagenRecuperar() }}" alt="" width="100px">
                            </td>
                            <td>
                                {{ $item->cantidad }}
                            </td>
                            <td>
                                {{ $item->precio_unitario }}
                            </td>
                            <td>
                                {{ $item->precio_unitario * $item->cantidad }}
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="text-center">No hay productos en el pedido</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>   
        </div>
@endif
</div>