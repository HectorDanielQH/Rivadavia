<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = [
        'email',
    ];

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
}
