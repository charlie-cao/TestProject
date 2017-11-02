<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Apple
 * @package App\Models
 * @version November 2, 2017, 11:40 am UTC
 *
 * @property string title
 * @property string msg
 * @property string help
 */
class Apple extends Model
{
    use SoftDeletes;

    public $table = 'apples';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'title',
        'msg',
        'help'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'title' => 'string',
        'msg' => 'string',
        'help' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
