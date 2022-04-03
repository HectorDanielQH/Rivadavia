<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Empleado;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class Empleados extends Component
{
    public $abrirFormulario = false, $users;
    public $empleados, $Email ,$celular, $password,$empleado_id,$nombreUsuario,$ci;
    public function render()
    {
        $this->empleados = Empleado::all();
        $this->users = User::all();
        return view('livewire.empleados');
    }
    public function crearEmpleado(){
        $this->abrirFormulario = true;
        $this->limpiarDatos();
    }
    public function limpiarDatos(){
        $this->Email = null;
        $this->celular = null;
        $this->password = null;
        $this->empleado_id = null;
        $this->nombreUsuario = null;
        $this->ci = null;
    }
    public function cerrarFormulario(){
        $this->abrirFormulario = false;
    }
    public function guardarEmpleado(){
        try
        {
            Empleado::updateOrCreate(['id'=>$this->empleado_id],
            [
                'ci' => $this->ci,
                'celular' => $this->celular,
            ]);
            if($this->empleado_id == null){
                User::Create(
                [
                    'name' => $this->nombreUsuario,
                    'email' => $this->Email,
                    'password' => Hash::make($this->password),
                    'cliente_id' => null,
                    'empleado_id' => Empleado::where('ci',$this->ci)->first()->id,
                    'administrador_id' => null,
                ])->assignRole('empleado');
            }else{
                $actualizar=User::where('empleado_id',$this->empleado_id)->first();
                $actualizar->name = $this->nombreUsuario;
                $actualizar->email = $this->Email;
                $actualizar->password = Hash::make($this->password);
                $actualizar->save();
            }

            $this->abrirFormulario = false;
        }
        catch (\Exception $e)
        {
            session()->flash('error', 'TIENES DUPLICADO EL CI O EL EMAIL');
        }
        
    }
    public function editarEmpleado($id){
        $this->empleado_id = $id;
        $this->abrirFormulario = true;
        $this->Email = Empleado::find($id)->User->email;
        $this->celular = Empleado::find($id)->celular;
        $this->nombreUsuario = Empleado::find($id)->User->name;
        $this->ci = Empleado::find($id)->ci;
        $this->password = Empleado::find($id)->User->password;
    }
    public function eliminarEmpleado($id){
        User::where('empleado_id',$id)->delete();
        Empleado::find($id)->delete();
    }
}
