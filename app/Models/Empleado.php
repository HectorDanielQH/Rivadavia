<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;
    protected $table='empleados';
    protected $fillable = [
        'ci',
        'celular',
    ];

    public function User()
    {
        return $this->hasOne(User::class,'empleado_id','id');
    }
}
