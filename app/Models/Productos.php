<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Productos
 * @package App\Models
 * @version May 20, 2021, 1:19 pm UTC
 *
 * @property \App\Models\TiposProducto $tip
 * @property \Illuminate\Database\Eloquent\Collection $guiasTransportes
 * @property integer $tip_id
 * @property string $pro_descripcion
 * @property string $pro_observaciones
 */
class Productos extends Model
{

    public $table = 'productos';
    protected $primaryKey='pro_id';
    public $timestamps=false;
    



    public $fillable = [
        'tip_id',
        'pro_descripcion',
        'pro_observaciones'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'pro_id' => 'integer',
        'tip_id' => 'integer',
        'pro_descripcion' => 'string',
        'pro_observaciones' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'tip_id' => 'required|integer',
        'pro_descripcion' => 'required|string|max:200',
        'pro_observaciones' => 'nullable|string|max:150'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function tip()
    {
        return $this->belongsTo(\App\Models\TiposProducto::class, 'tip_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function guiasTransportes()
    {
        return $this->hasMany(\App\Models\GuiasTransporte::class, 'pro_id');
    }
}
