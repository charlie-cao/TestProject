<?php

namespace App\Repositories;

use App\Models\Apple;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class AppleRepository
 * @package App\Repositories
 * @version November 2, 2017, 11:40 am UTC
 *
 * @method Apple findWithoutFail($id, $columns = ['*'])
 * @method Apple find($id, $columns = ['*'])
 * @method Apple first($columns = ['*'])
*/
class AppleRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'msg',
        'help'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Apple::class;
    }
}
