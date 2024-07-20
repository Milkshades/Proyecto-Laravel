<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'usuarios';

    protected $fillable = [
        'nombre',     // Nombre en la base de datos
        'correo',     // Email en la base de datos
        'contraseña', // Password en la base de datos
    ];

    protected $hidden = [
        'contraseña', // Password en la base de datos
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function setContraseñaAttribute($password)
    {
        $this->attributes['contraseña'] = bcrypt($password);
    }
}
