<?php

namespace App\Repositories;

use App\Models\TiposProducto;
use App\Repositories\BaseRepository;

/**
 * Class TiposProductoRepository
 * @package App\Repositories
 * @version May 18, 2021, 10:14 pm UTC
*/

class TiposProductoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'tip_descripcion',
        'tip_estado'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return TiposProducto::class;
    }
}
