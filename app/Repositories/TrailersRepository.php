<?php

namespace App\Repositories;

use App\Models\Trailers;
use App\Repositories\BaseRepository;

/**
 * Class TrailersRepository
 * @package App\Repositories
 * @version May 18, 2021, 10:04 pm UTC
*/

class TrailersRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'tra_placa',
        'tra_modelo',
        'tra_color',
        'tra_año',
        'tra_estado'
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
        return Trailers::class;
    }
}
