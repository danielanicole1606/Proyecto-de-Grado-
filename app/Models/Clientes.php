<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Clientes
 * @package App\Models
 * @version May 23, 2021, 9:10 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $guiasTransportes
 * @property string $cli_ced_ruc
 * @property string $cli_nom_rasocial
 * @property string $cli_direccion
 * @property string $cli_telefono
 * @property string $cli_correo
 * @property integer $cli_estado
 */
class Clientes extends Model
{

    public $table = 'clientes';
    protected $primaryKey='cli_id';
    public $timestamps=false;
    

    public $fillable = [
        'cli_ced_ruc',
        'cli_nom_rasocial',
        'cli_direccion',
        'cli_telefono',
        'cli_correo',
        'cli_estado'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'cli_id' => 'integer',
        'cli_ced_ruc' => 'string',
        'cli_nom_rasocial' => 'string',
        'cli_direccion' => 'string',
        'cli_telefono' => 'string',
        'cli_correo' => 'string',
        'cli_estado' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'cli_ced_ruc' => 'required|string',
        'cli_nom_rasocial' => 'required|string',
        'cli_direccion' => 'required|string',
        'cli_telefono' => 'required|string',
        'cli_correo' => 'required|string',
        'cli_estado' => 'required|integer'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function guiasTransportes()
    {
        return $this->hasMany(\App\Models\GuiasTransporte::class, 'cli_id');
    }
}
