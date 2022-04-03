<div class="container bg-transparent animate__animated animate__fadeInUp pt-4">
    <form class="bg-dark shadow-md rounded p-4">
        <div class="mb-4">
        <label class="block text-white-700 text-sm font-bold mb-2" for="Descripcion">
            Ingresar la categoria
        </label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="descripcion" type="text" placeholder="Ingeresa la descripcion" wire:model="descripcion">
        </div>
        <div class="d-flex w-100 justify-content-around">
            <button wire:click.prevent="guardar()" class="btn btn-success bg-success" type="submit">
                Guardar
            </button>
            <button class="btn btn-danger bg-danger" wire:click="cerrarModal()" type="button">
                Cerrar Panel
            </button>
        </div>
    </form>
    <br>
    <br>
    <p class="text-center text-with-500 text-xs">
        &copy;2022 Imprenta Rivadavia. Derechos reservados.
    </p>
    <br>
    <br>
</div>