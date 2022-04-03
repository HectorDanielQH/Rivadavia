<div class="bg-gradient-dark">
    @forelse($tipos as $tipo)
        @forelse($productos as $producto)
            @if($producto->tipo_id == $tipo->id)
                
            @endif
        @empty
            {{__('No hay productos')}}
        @endforelse
    @empty
        {{__('No existen productos')}}
    @endforelse
</div>
