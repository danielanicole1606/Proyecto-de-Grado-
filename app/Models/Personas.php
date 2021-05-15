<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Personas
 * @package App\Models
 * @version May 12, 2021, 2:44 am UTC
 *
 * @property integer $per_id
 * @property string $per_apellidos
 * @property string $per_nombre
 * @property string $per_telefono
 * @property string $per_direccion
 * @property string $per_correo
 * @property integer $per_tipo
 * @property integer $per_estado
 */
class Personas extends Model
{
    use SoftDeletes;

    public $table = 'personas';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'per_id',
        'per_apellidos',
        'per_nombre',
        'per_telefono',
        'per_direccion',
        'per_correo',
        'per_tipo',
        'per_estado'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'per_id' => 'integer',
        'per_apellidos' => 'string',
        'per_nombre' => 'string',
        'per_telefono' => 'string',
        'per_direccion' => 'string',
        'per_correo' => 'string',
        'per_tipo' => 'integer',
        'per_estado' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'per_id' => 'nullable|integer',
        'per_apellidos' => 'nullable|string|max:50',
        'per_nombre' => 'nullable|string|max:50',
        'per_telefono' => 'nullable|string|max:50',
        'per_direccion' => 'nullable|string|max:50',
        'per_correo' => 'nullable|string|max:50',
        'per_tipo' => 'nullable|integer',
        'per_estado' => 'nullable|integer'
    ];

    
}
