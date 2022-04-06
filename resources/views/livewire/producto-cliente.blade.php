<div class="container-fluid d-flex justify-content-center p-4"
    style="background: #c31432;  /* fallback for old browsers */
    background: -webkit-linear-gradient(to right, #240b36, #c31432);  /* Chrome 10-25, Safari 5.1-6 */
    background: linear-gradient(to right, #240b36, #c31432); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    height: 100%;"
>
<div class="container animate__animated animate__fadeInUp">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    @forelse ($tipos as $tipo)
            <div class="p-4 rounded-pill animate__animated animate__fadeInUp" style="background: #C33764;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #1D2671, #C33764);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #1D2671, #C33764); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            ">
                <span
                    style="font-size:30px;"
                >
                    {{ $tipo->descripcion }}
                </span>
            </div>
            <div class="d-flex w-100 justify-content-center flex-wrap animate__animated animate__fadeInUp">
                @forelse ($productos as $producto)
                    @if ($producto->id_tipo_producto == $tipo->id)
                        <div class="card m-4" style="width: 20rem; height:20rem;background: #000428;  /* fallback for old browsers */
                        background: -webkit-linear-gradient(to right, #004e92, #000428);  /* Chrome 10-25, Safari 5.1-6 */
                        background: linear-gradient(to right, #004e92, #000428); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
                        ">
                            <div class="card-header d-flex w-100 h-50">
                                <img src="{{$producto->imagenRecuperar()}}" class="card-img-top block">
                            </div>
                            <div class="card-body mt-1">
                                <h4 class="card-title">{{$producto->Descripcion}}</h4><br><br>
                                <h4 class="card-title">Codigo del producto: {{$producto->cod_prod}}</h4><br>
                                <p class="card-text">Precio del producto: {{$producto->Precio_venta}}</p>
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
</div>
</div>