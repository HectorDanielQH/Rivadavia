<div class="container-fluid contenedor" style="background: #c31432;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #240b36, #c31432);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #240b36, #c31432); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
">
    <style>
        .contenedor{
            width: 100%;
            height: 100vh;
            display: flex;
            flex-direction: column ;
            justify-content: flex-start;
            align-items: center;
            overflow: hidden;
        }
    </style>
    <div class="container">
        <h1 class="col-12 text-dark h1 text-center m-4">
            Pedidos pendientes
        </h1>
    </div>
    <div class="container">
        <table class="opacity-25 table table-bordered table-dark table-hover">
            <thead>
                <tr>
                    <th class="col-2">Opciones</th>
                    <th class="col-8">Descripcion</th>
                    <th class="col-2">Estado</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pedido as $item)
                    <tr >
                        <td class="d-flex align-items-center justify-content-around">
                            <button class="btn btn-danger" wire:click="Eliminar({{$item->cod_pedido}})">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                            <button class="btn btn-warning">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button class="btn btn-primary">
                                <i class="fas fa-eye"></i>
                            </button>
                        </td>
                        <td>
                            {{__('PEDIDO REALIZADO EN FECHA: ')}} {{$item->dato}}
                        </td>
                        <td>
                            {{__('PENDIENTE') }} {{$item->estado}}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>