<?php

namespace App\Repositories;

use App\Models\Movie;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class MovieRepository
 * @package App\Repositories
 * @version November 29, 2017, 12:58 pm UTC
 *
 * @method Movie findWithoutFail($id, $columns = ['*'])
 * @method Movie find($id, $columns = ['*'])
 * @method Movie first($columns = ['*'])
*/
class MovieRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'url',
        'author',
        'memo'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Movie::class;
    }
}
