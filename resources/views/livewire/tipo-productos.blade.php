
<div class="container-fluid d-flex"
style="background: #000428;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #004e92, #000428);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #004e92, #000428); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

    height:100vh;
">
<div class="container pt-4">
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    @if($modal)
        @include('livewire.tipo-productos.create')
    @else
        <table class="table table-hover table-dark table-bordered animate__animated animate__fadeInUp">
            <thead>
                <tr>
                    <th class="text-dark">
                        <span><button class="btn btn-success" wire:click="create_product()">+</button></span>  
                        Descripcion
                    </th>
                    <th class="text-warning">Opciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tipoProductos as $tipoProducto)
                    <tr>
                        <td class="text-dark">
                            {{ $tipoProducto->descripcion }}
                        </td>
                        <td>
                            <button wire:click="editar({{ $tipoProducto->id }})" class="btn btn-sm btn-primary">Editar</button>
                            <button wire:click="eliminar({{ $tipoProducto->id }})" class="btn btn-sm btn-danger">Eliminar</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
</div>