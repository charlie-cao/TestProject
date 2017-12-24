<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Music
 * @package App\Models
 * @version November 29, 2017, 12:40 pm UTC
 *
 * @property string name
 * @property string desc
 * @property string author
 * @property string url
 * @property integer size
 * @property string creator
 */
class Music extends Model
{
    use SoftDeletes;

    public $table = 'musics';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'desc',
        'author',
        'url',
        'size',
        'creator'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'desc' => 'string',
        'author' => 'string',
        'url' => 'string',
        'size' => 'integer',
        'creator' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
