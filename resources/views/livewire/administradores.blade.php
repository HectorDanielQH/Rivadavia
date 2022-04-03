@if($abrirFormulario)
    @include('livewire.administrador.create')
@else
    <div class="container pt-4">
        <table class="table mt-4">
            <thead class="thead-inverse">
                <tr>
                    <strong>
                        <button class="btn btn-success" wire:click="crearAdministrador()">
                            +
                        </button>
                        <span>
                            Usuarios Administradores
                        </span>
                    </strong>
                </tr>
                <tr>
                    <th>C.I.</th>
                    <th>Nombre de Usuario</th>
                    <th>Correo</th>
                    <th>Celular</th>
                    <th>Opciones</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($administradores as $administrador)
                        @if($administrador->id != Auth::user()->administrador->id)
                        <tr>
                            <td>{{$administrador->ci}}</td>
                            <td>{{$administrador->User->name}}</td>
                            <td>{{$administrador->User->email}}</td>
                            <td>{{$administrador->celular}}</td>
                            <td>
                                <button wire:click="editarAdministrador({{ $administrador->id }})" class="btn btn-sm btn-primary">Editar</button>
                                <button wire:click="eliminarAdministrador({{ $administrador->id }})" class="btn btn-sm btn-danger">Eliminar</button>
                            </td>
                        </tr>
                        @endif
                    @endforeach
                </tbody>
        </table>
    </div>
@endif