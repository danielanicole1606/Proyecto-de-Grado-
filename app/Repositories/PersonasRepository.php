<?php

namespace App\Repositories;

use App\Models\Personas;
use App\Repositories\BaseRepository;

/**
 * Class PersonasRepository
 * @package App\Repositories
 * @version May 12, 2021, 2:44 am UTC
*/

class PersonasRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'per_id',
        'per_apellidos',
        'per_nombre',
        'per_telefono',
        'per_direccion',
        'per_correo',
        'per_tipo',
        'per_estado'
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
        return Personas::class;
    }
}
