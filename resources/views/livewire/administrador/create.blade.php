<div class="container animate__animated animate__flipInY pt-4">
    @if(session('error'))
        <div class="alert alert-danger" role="alert">
            {{session('error')}}
        </div>
    @endif
    <form class="bg-white shadow-md rounded p-4" wire:submit.prevent="guardarAdministrador()" enctype="multipart/form-data">
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="nombreUsuario">
                Nombre de Usuario
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="nombreUsuario" type="text" placeholder="Ingresa el nombre de usuario" wire:model="nombreUsuario">
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="ci">
                C.I.:
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="ci" type="text" placeholder="Ingresa tu carnet de identidad" wire:model="ci">
            @error('ci')
                <p class="text-red-500 text-xs italic">
                    {{ __('ESTE CARNET YA EXISTE') }}
                </p>
            @enderror
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="celular">
                Celular
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="celular" type="text" placeholder="Ingresa tu celular" wire:model="celular">
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                Email
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" type="text" placeholder="Ingresa el email" wire:model="Email">
        </div>


        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                Contraseña
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" placeholder="Ingeresa tu contraseña" wire:model="password">
        </div>


        <div class="d-flex w-100 justify-content-around">
            <button class="btn btn-success bg-success" type="submit">
                Guardar
            </button>
            <button class="btn btn-danger bg-danger" wire:click="cerrarFormulario()" type="button">
                Cerrar Panel
            </button>
        </div>
    </form>
    <p class="text-center text-gray-500 text-xs">
        &copy;2022 Imprenta Rivadavia. Derechos reservados.
    </p>
</div>