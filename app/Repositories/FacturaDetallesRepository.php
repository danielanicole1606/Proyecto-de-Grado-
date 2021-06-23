<?php

namespace App\Repositories;

use App\Models\FacturaDetalles;
use App\Repositories\BaseRepository;

/**
 * Class FacturaDetallesRepository
 * @package App\Repositories
 * @version June 5, 2021, 12:15 am UTC
*/

class FacturaDetallesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'emp_id',
        'cli_id',
        'cg_id',
        'fac_numero',
        'fac_fecha',
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
        return FacturaDetalles::class;
    }
}
