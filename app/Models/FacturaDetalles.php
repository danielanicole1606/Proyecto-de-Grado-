<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class FacturaDetalles
 * @package App\Models
 * @version June 5, 2021, 12:15 am UTC
 *
 * @property \App\Models\Factura $fac
 * @property \App\Models\Producto $pro
 * @property integer $fac_id
 * @property integer $pro_id
 * @property number $det_cant
 * @property number $det_valu
 */
class FacturaDetalles extends Model
{
    public $table = 'facturas_detalle';
     protected $primaryKey='det_id';
    public $timestamps=false;


    public $fillable = [
        'fac_id',
        'pro_id',
        'det_cant',
        'det_valu'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'det_id' => 'integer',
        'fac_id' => 'integer',
        'pro_id' => 'integer',
        'det_cant' => 'numeric',
        'det_valu' => 'numeric'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'fac_id' => 'required|integer',
        'pro_id' => 'required|integer',
       
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function fac()
    {
        return $this->belongsTo(\App\Models\Factura::class, 'fac_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function pro()
    {
        return $this->belongsTo(\App\Models\Producto::class, 'pro_id');
    }
}
