<?php

namespace App\Repositories;

use App\Models\note;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class noteRepository
 * @package App\Repositories
 * @version November 3, 2017, 4:53 am UTC
 *
 * @method note findWithoutFail($id, $columns = ['*'])
 * @method note find($id, $columns = ['*'])
 * @method note first($columns = ['*'])
*/
class noteRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'content',
        'auth'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return note::class;
    }
}
