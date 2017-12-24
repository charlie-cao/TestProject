<?php

namespace App\Repositories;

use App\Models\Music;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class MusicRepository
 * @package App\Repositories
 * @version November 29, 2017, 12:40 pm UTC
 *
 * @method Music findWithoutFail($id, $columns = ['*'])
 * @method Music find($id, $columns = ['*'])
 * @method Music first($columns = ['*'])
*/
class MusicRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'desc',
        'author',
        'url',
        'size',
        'creator'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Music::class;
    }
}
