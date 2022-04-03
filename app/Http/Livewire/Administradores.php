<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Administrador;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class Administradores extends Component
{
    public $abrirFormulario = false, $users;
    public $administradores, $Email ,$celular, $password,$administrador_id,$nombreUsuario,$ci;
    public function render()
    {
        $this->administradores = Administrador::all();
        $this->users = User::all();
        return view('livewire.administradores');
    }
    public function crearAdministrador(){
        $this->abrirFormulario = true;
        $this->limpiarDatos();
    }
    public function limpiarDatos(){
        $this->Email = null;
        $this->celular = null;
        $this->password = null;
        $this->administrador_id = null;
        $this->nombreUsuario = null;
        $this->ci = null;
    }
    public function cerrarFormulario(){
        $this->abrirFormulario = false;
    }
    public function guardarAdministrador(){
        try
        {
            Administrador::updateOrCreate(['id'=>$this->administrador_id],
            [
                'ci' => $this->ci,
                'celular' => $this->celular,
            ]);
            if($this->administrador_id == null){

                User::Create([
                    'name' => $this->nombreUsuario,
                    'email' => $this->Email,
                    'password' => Hash::make($this->password),
                    'cliente_id' => null,
                    'empleado_id' => null,
                    'administrador_id' => Administrador::where('ci',$this->ci)->first()->id,
                ])->assignRole('administrador');

            }else{
                $actualizar=User::where('administrador_id',$this->administrador_id)->first();
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
    public function editarAdministrador($id){
        $this->administrador_id = $id;
        $this->abrirFormulario = true;
        $this->Email = Administrador::find($id)->User->email;
        $this->celular = Administrador::find($id)->celular;
        $this->nombreUsuario = Administrador::find($id)->user->name;
        $this->ci = Administrador::find($id)->ci;
        $this->password = Administrador::find($id)->user->password;
    }
    public function eliminarAdministrador($id){
        User::where('administrador_id',$id)->delete();
        Administrador::find($id)->delete();
    }
}
