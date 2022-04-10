<div class="container-fluid pt-4">
    
    <div class="container bg-dark p-4">
        <div class="display-4">
            FORMULARIO DE PEDIDO
        </div>
        <form class="bg-dark m-4 " wire:submit.prevent="GuardarPedido()" enctype="multipart/form-data">
            <div class="form-group">
                <label for="descripcion">Descripcion</label>
                <input type="text" id="descripcion" wire:model="descripcion" class="form-control">
                @error('descripcion') 
                    <span class="error">{{ __('SE REQUIERE DESCRIPCION') }}</span> 
                @enderror
            </div>
            <div class="form-group">
                <label for="cantidad">Cantidad</label>
                <input type="number" id="cantidad" wire:model="cantidad" class="form-control">
                @error('cantidad') 
                    <span class="error">{{ __('SE REQUIERE NECESARIAMENTE LA CANTIDAD') }}</span> 
                @enderror
            </div>
            <div class="form-group">
                <label for="imagen">Imagen</label>
                <input type="file" id="imagen" wire:model="imagen" class="form-control">
                @error('imagen') 
                    <span class="error">{{ __('SE REQUIERE UNA IMAGEN') }}</span> 
                @enderror
            </div>
            <button class="btn btn-success" type="submit">
                Agregar
            </button>
            <button class="btn btn-danger" wire:click="CerrarFormulario()" type="button">
                Cancelar
            </button>
        </form>
    </div>
</div>