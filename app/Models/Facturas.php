<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Facturas
 * @package App\Models
 * @version June 5, 2021, 12:15 am UTC
 *
 * @property \App\Models\Cliente $cli
 * @property \App\Models\Empresa $emp
 * @property \App\Models\GuiasTransporte $cg
 * @property \Illuminate\Database\Eloquent\Collection $productos
 * @property integer $emp_id
 * @property integer $cli_id
 * @property integer $cg_id
 * @property string $fac_numero
 * @property string $fac_fecha
 * @property number $fac_iva
 * @property number $fac_descuento
 */
class Facturas extends Model
{

    public $table = 'facturas';
    protected $primaryKey='fac_id';
    public $timestamps=false;
  



    public $fillable = [
        'emp_id',
        'cli_id',
        'cg_id',
        'fac_numero',
        'fac_fecha',
        'fac_iva',
        'fac_descuento'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'fac_id' => 'integer',
        'emp_id' => 'integer',
        'cli_id' => 'integer',
        'cg_id' => 'integer',
        'fac_numero' => 'string',
        'fac_fecha' => 'string',
        'fac_iva' => 'numeric',
        'fac_descuento' => 'numeric'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'emp_id' => 'required|integer',
        'cli_id' => 'required|integer',
        'cg_id' => 'required|integer',
        'fac_numero' => 'required|string|max:50',
        'fac_fecha' => 'nullable|string|max:50'
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function cli()
    {
        return $this->belongsTo(\App\Models\Cliente::class, 'cli_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function emp()
    {
        return $this->belongsTo(\App\Models\Empresa::class, 'emp_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function cg()
    {
        return $this->belongsTo(\App\Models\GuiasTransporte::class, 'cg_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function productos()
    {
        return $this->belongsToMany(\App\Models\Producto::class, 'facturas_detalle');
    }
}
