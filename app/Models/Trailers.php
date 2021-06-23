<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Trailers
 * @package App\Models
 * @version May 18, 2021, 10:04 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $guiasTransportes
 * @property string $tra_placa
 * @property string $tra_modelo
 * @property string $tra_color
 * @property string $tra_año
 * @property integer $tra_estado
 */
class Trailers extends Model
{

    public $table = 'trailers';
    protected $primaryKey='tra_id';
    public $timestamps=false;
    
    


    public $fillable = [
        'tra_placa',
        'tra_modelo',
        'tra_color',
        'tra_año',
        'tra_estado'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'tra_id' => 'integer',
        'tra_placa' => 'string',
        'tra_modelo' => 'string',
        'tra_color' => 'string',
        'tra_año' => 'string',
        'tra_estado' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'tra_placa' => 'required|string',
        'tra_modelo' => 'required|string',
        'tra_color' => 'required|string',
        'tra_año' => 'required|string',
        'tra_estado' => 'required|integer'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function guiasTransportes()
    {
        return $this->hasMany(\App\Models\GuiasTransporte::class, 'tra_id');
    }
}
