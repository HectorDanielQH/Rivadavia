<link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
/>
    <div class="container-fluid animate__animated animate__fadeInUp pt-4 bg-tranparent" style="background: #c31432;  /* fallback for old browsers */
    background: -webkit-linear-gradient(to right, #240b36, #c31432);  /* Chrome 10-25, Safari 5.1-6 */
    background: linear-gradient(to right, #240b36, #c31432); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    height: 100%; margin-bottom: 15vh">
        <form class="bg-dark text-white shadow-md rounded p-4" wire:submit.prevent="guardar()" enctype="multipart/form-data">
            <div class="mb-4">
                @if($hab_up)
                    <select class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="opcion">
                        @forelse ($tipoproductos as $item)
                            @if ($item->id == $id_tipo_producto)
                                <option value="{{$item->id}}" selected>{{$item->descripcion}}</option>
                            @else
                                <option value="{{$item->id}}">{{$item->descripcion}}</option>
                            @endif
                        @empty
                            NO EXISTE RECURSO
                        @endforelse
                    </select>
                @else
                    <label class="block text-white-700 text-sm font-bold mb-2" for="Descripcion">
                        Categoria
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="descripcion_tipo" type="text" placeholder="Ingresa la descripcion" wire:model="descripicion_tipo" disabled>
                @endif
            </div>

            <div class="mb-4">
                <label class="block text-white-700 text-sm font-bold mb-2" for="Descripcion">
                    Codigo del producto
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="codigo_prod" type="text" placeholder="Ingresa el codigo" wire:model="codigo_prod">
            </div>

            <div class="mb-4">
                <label class="block text-white-700 text-sm font-bold mb-2" for="Descripcion">
                    Descripcion del producto
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="descripcion" type="text" placeholder="Ingeresa la descripcion" wire:model="descripcion">
            </div>

            <div class="mb-4">
                <label class="block text-white-700 text-sm font-bold mb-2" for="Descripcion">
                    Precio de fabricacion
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="precio_fab" type="text" placeholder="Ingeresa la descripcion" wire:model="precio_fab">
            </div>

            <div class="mb-4">
                <label class="block text-white-700 text-sm font-bold mb-2" for="Descripcion">
                    Precio de venta
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="precio_venta" type="text" placeholder="Ingeresa la descripcion" wire:model="precio_venta">
            </div>

            <div class="mb-4">
                <label class="block text-white-700 text-sm font-bold mb-2" for="Descripcion">
                    Imagen del producto
                </label>
                @if($imagen)
                    <img src={{$imagen}} alt="">
                @endif
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-light-700 leading-tight focus:outline-none focus:shadow-outline" id="imagen" type="file" placeholder="Ingeresa la descripcion" wire:model="imagen" required>
            </div>


            <div class="d-flex w-100 justify-content-around">
                <button class="btn btn-success bg-success" type="submit">
                    Guardar
                </button>
                <button class="btn btn-danger bg-danger" wire:click="cerrarModal()" type="button">
                    Cerrar Panel
                </button>
            </div>
        </form>
        <br><br>
        <p class="text-center text-gray-500 text-xs">
            &copy;2022 Imprenta Rivadavia. Derechos reservados.
        </p>
        <br><br>
    </div>
