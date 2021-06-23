<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;
    public $table = 'personas';
    protected $primaryKey='per_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 
        'email', 
        'password',
        'per_cedula',
        'per_apellidos',
        'per_nombres',
        'per_direccion',
        'per_telefono',
        'per_fnacimiento',
        'per_estado_civil',
        'per_sexo',
        'per_usuario',
        'per_tipo'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'name' =>'string',
        'email'  =>'string',
        'password'  =>'string',
        'per_cedula'  =>'string',
        'per_apellidos'  =>'string',
        'per_nombres'  =>'string',
        'per_direccion'  =>'string',
        'per_telefono'  =>'string',
        'per_fnacimiento'  =>'string',
        'per_estado_civil'  =>'string',
        'per_sexo'  =>'string',
        'per_usuario'  =>'string',
        'per_tipo'  =>'string'
    ];

    public static $rules = [
        'name' =>'required|string',
        'email'  =>'required|string',
        'password'  =>'required|string',
        'per_cedula'  =>'required|string',
        'per_apellidos'  =>'required|string',
        'per_nombres'  =>'required|string',
        'per_direccion'  =>'required|string',
        'per_telefono'  =>'required|string',
        'per_fnacimiento'  =>'required|string',
        'per_estado_civil'  =>'required|string',
        'per_sexo'  =>'required|string',
        'per_usuario'  =>'required|string'
    ];
}
