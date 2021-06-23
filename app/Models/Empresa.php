<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Empresa
 * @package App\Models
 * @version May 18, 2021, 8:17 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $facturas
 * @property string $emp_ruc
 * @property string $emp_razon_social
 * @property string $emp_rep_legal
 * @property integer $emp_telefono
 * @property string $emp_direccion
 * @property string $emp_correo
 */
class Empresa extends Model
{

    public $table = 'empresa';
    protected $primaryKey='emp_id';
    public $timestamps=false;
    

    public $fillable = [
        'emp_ruc',
        'emp_razon_social',
        'emp_rep_legal',
        'emp_telefono',
        'emp_direccion',
        'emp_correo'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'emp_id' => 'integer',
        'emp_ruc' => 'string',
        'emp_razon_social' => 'string',
        'emp_rep_legal' => 'string',
        'emp_telefono' => 'string',
        'emp_direccion' => 'string',
        'emp_correo' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'emp_ruc' => 'required|string',
        'emp_razon_social' => 'required|string',
        'emp_rep_legal' => 'required|string',
        'emp_telefono' => 'required|string',
        'emp_direccion' => 'required|string',
        'emp_correo' => 'required|string'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function facturas()
    {
        return $this->hasMany(\App\Models\Factura::class, 'emp_id');
    }
}
