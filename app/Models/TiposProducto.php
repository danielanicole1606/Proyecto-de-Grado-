<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class TiposProducto
 * @package App\Models
 * @version May 18, 2021, 10:14 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $productos
 * @property string $tip_descripcion
 * @property integer $tip_estado
 */
class TiposProducto extends Model
{

    public $table = 'tipos_producto';
    protected $primaryKey='tip_id';
    public $timestamps=false;



    public $fillable = [
        'tip_descripcion',
        'tip_estado'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'tip_id' => 'integer',
        'tip_descripcion' => 'string',
        'tip_estado' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'tip_descripcion' => 'required|string',
        'tip_estado' => 'required|integer'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function productos()
    {
        return $this->hasMany(\App\Models\Producto::class, 'tip_id');
    }
}
