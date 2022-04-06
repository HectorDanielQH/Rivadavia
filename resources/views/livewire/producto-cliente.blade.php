
<div class="container-fluid d-flex justify-content-center p-4"
    style="background: #000428;  /* fallback for old browsers */
    background: -webkit-linear-gradient(to right, #004e92, #000428);  /* Chrome 10-25, Safari 5.1-6 */
    background: linear-gradient(to right, #004e92, #000428); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    
    height: 100%;"
>
<div class="container animate__animated animate__fadeInUp">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    @forelse ($tipos as $tipo)
            <div data-aos="flip-left"
            data-aos-easing="ease-out-cubic"
            data-aos-duration="1500" class="p-4 rounded-pill animate__animated animate__fadeInUp" style="background: #780206;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #061161, #780206);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #061161, #780206); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            ">
                <span
                    style="font-size:20px;"
                >
                    {{ $tipo->descripcion }}
                </span>
            </div>
            <div data-aos="flip-left"
            data-aos-easing="ease-out-cubic"
            data-aos-duration="1500" class="d-flex w-100 justify-content-center flex-wrap animate__animated animate__fadeInUp">
                @forelse ($productos as $producto)
                    @if ($producto->id_tipo_producto == $tipo->id)
                        <div data-aos="flip-left"
            data-aos-easing="ease-out-cubic"
            data-aos-duration="1500" class="card m-4" style="width: 20rem; height:20rem;background: #360033;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #0b8793, #360033);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #0b8793, #360033); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
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
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
  </script>