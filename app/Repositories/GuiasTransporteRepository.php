<?php

namespace App\Repositories;

use App\Models\GuiasTransporte;
use App\Repositories\BaseRepository;

/**
 * Class GuiasTransporteRepository
 * @package App\Repositories
 * @version June 1, 2021, 2:16 pm UTC
*/

class GuiasTransporteRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'cli_id',
        // 'per_id',
        'chofer_id',
        'tra_id',
        'tip_id',
        'cg_fecha',
        'cg_numero_guia',
        'cg_origen',
        'cg_destino',
        'cg_observaciones',
        'cg_estado'
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
        return GuiasTransporte::class;
    }
}
