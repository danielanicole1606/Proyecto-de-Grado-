<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class GuiasTransporte
 * @package App\Models
 * @version June 1, 2021, 2:16 pm UTC
 *
 * @property \App\Models\Cliente $cli
 * @property \App\Models\Persona $per
 * @property \App\Models\Persona $chofer
 * @property \App\Models\TiposProducto $tip
 * @property \App\Models\Trailer $tra
 * @property \Illuminate\Database\Eloquent\Collection $facturas
 * @property integer $cli_id
 * @property integer $per_id
 * @property integer $chofer_id
 * @property integer $tra_id
 * @property integer $tip_id
 * @property string $cg_fecha
 * @property string $cg_numero_guia
 * @property string $cg_origen
 * @property string $cg_destino
 * @property string $cg_observaciones
 * @property integer $cg_estado
 */
class GuiasTransporte extends Model
{

    public $table = 'guias_transporte';
    protected $primaryKey='cg_id';
    public $timestamps=false;



    public $fillable = [
        'cli_id',
        // 'per_id',
        'chofer_id',
        'tra_id',
        'tip_id',
        'cg_fecha',
        'cg_numero_guia',
        'cg_origen',
        'cg_destino',
        'cg_observaciones'
       
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'cg_id' => 'integer',
        'cli_id' => 'integer',
        // 'per_id' => 'integer',
        'chofer_id' => 'integer',
        'tra_id' => 'integer',
        'tip_id' => 'integer',
        'cg_fecha' => 'string',
        'cg_numero_guia' => 'string',
        'cg_origen' => 'string',
        'cg_destino' => 'string',
        'cg_observaciones' => 'string'
        
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'cli_id' => 'required|integer',
        // 'per_id' => 'nullable|integer',
        'chofer_id' => 'required|integer',
        'tra_id' => 'required|integer',
        'tip_id' => 'required|integer',
        'cg_fecha' => 'required|string',
        'cg_numero_guia' => 'required|string',
        'cg_origen' => 'required|string',
        'cg_destino' => 'required|string',
        'cg_observaciones' => 'nullable|string'
        
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
    public function per()
    {
        return $this->belongsTo(\App\Models\Persona::class, 'per_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function chofer()
    {
        return $this->belongsTo(\App\Models\Persona::class, 'chofer_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function tip()
    {
        return $this->belongsTo(\App\Models\TiposProducto::class, 'tip_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function tra()
    {
        return $this->belongsTo(\App\Models\Trailer::class, 'tra_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function facturas()
    {
        return $this->hasMany(\App\Models\Factura::class, 'cg_id');
    }
}
