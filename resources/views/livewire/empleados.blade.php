@if($abrirFormulario)
    @include('livewire.empleado.create')
@else
    <div class="container pt-4">
        <table class="table mt-4">
            <thead class="thead-inverse">
                <tr>
                    <strong>
                        <button class="btn btn-success" wire:click="crearEmpleado()">
                            +
                        </button>
                        <span>
                            Usuarios Empleados
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
                    @foreach ($empleados as $empleado)
                        <tr>
                            <td>{{$empleado->ci}}</td>
                            <td>{{$empleado->User->name}}</td>
                            <td>{{$empleado->User->email}}</td>
                            <td>{{$empleado->celular}}</td>
                            <td>
                                <button wire:click="editarEmpleado({{ $empleado->id }})" class="btn btn-sm btn-primary">Editar</button>
                                <button wire:click="eliminarEmpleado({{ $empleado->id }})" class="btn btn-sm btn-danger">Eliminar</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
        </table>
    </div>
@endif