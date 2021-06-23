<?php

namespace App\Repositories;

use App\Models\Facturas;
use App\Repositories\BaseRepository;

/**
 * Class FacturasRepository
 * @package App\Repositories
 * @version June 5, 2021, 12:15 am UTC
*/

class FacturasRepository extends BaseRepository
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
        'fac_iva',
        'fac_descuento'
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
        return Facturas::class;
    }
}
