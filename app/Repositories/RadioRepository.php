<?php

namespace App\Repositories;

use App\Models\Radio;
use App\Repositories\BaseRepository;

/**
 * Class RadioRepository
 * @package App\Repositories
 * @version March 17, 2020, 3:13 am UTC
*/

class RadioRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'image',
        'description',
        'link',
        'categories_id',
        'countries_id'
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
        return Radio::class;
    }
}
