<div class="container-fluid d-flex justify-content-center p-4"
    style="background: #c31432;  /* fallback for old browsers */
    background: -webkit-linear-gradient(to right, #240b36, #c31432);  /* Chrome 10-25, Safari 5.1-6 */
    background: linear-gradient(to right, #240b36, #c31432); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    height: 100%;"
>
<div class="container animate__animated animate__fadeInUp">
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
/>
    @if(session('mensaje'))
        <div class="alert alert-success">
            {{session('mensaje')}}
        </div>
    @endif
    @if($modal)
        @include('livewire.producto.create')
    @else
        @forelse ($tipoproductos as $tipo)
            <div class="rounded-pill animate__animated animate__fadeInUp" style="background: #C33764;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #1D2671, #C33764);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #1D2671, #C33764); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            
            ">
                <span>
                    <button wire:click="create_product({{$tipo->id}})" class=" rounded-pill btn btn-warning m-2">
                        AGREGAR MÁS {{ $tipo->descripcion }}
                    </button>
                </span>
                <span>
                    {{ $tipo->descripcion }}
                </span>
            </div>
            <div class="d-flex w-100 justify-content-center flex-wrap animate__animated animate__fadeInUp">
                @forelse ($productos as $producto)
                    @if ($producto->id_tipo_producto == $tipo->id)
                        <div class="card m-4" style="width: 20rem; height:30rem;background: #000428;  /* fallback for old browsers */
                        background: -webkit-linear-gradient(to right, #004e92, #000428);  /* Chrome 10-25, Safari 5.1-6 */
                        background: linear-gradient(to right, #004e92, #000428); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
                        ">
                            <div class="card-header d-flex w-100 h-50">
                                <img src="{{$producto->imagenRecuperar()}}" class="card-img-top block">
                            </div>
                            <div class="card-body mt-1">
                                <h4 class="card-title">{{$producto->Descripcion}}</h4><br><br>
                                <h4 class="card-title">Codigo del producto: {{$producto->cod_prod}}</h4><br>
                                <p class="card-text">Precio de fabricación: {{$producto->Precio_fabricacion}}</p>
                                <p class="card-text">Precio de venta: {{$producto->Precio_venta}}</p>
                                <div class="d-flex justify-content-between mt-4">
                                    <button class="btn btn-success" wire:click="editar({{$producto->id}})">
                                        Editar Producto
                                    </button>
                                    <button class="btn btn-danger" wire:click="eliminar({{$producto->id}})">
                                        Eliminar Producto
                                    </button>
                                </div>
                            </div>
                        </div>
                    @endif
                @empty
                    <p>No hay productos</p>
                @endforelse
            </div>
        @empty
            <p>No hay productos</p>
        @endforelse
    @endif
</div>
</div>