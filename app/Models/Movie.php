<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Movie
 * @package App\Models
 * @version November 29, 2017, 12:58 pm UTC
 *
 * @property string name
 * @property string url
 * @property string author
 * @property string memo
 */
class Movie extends Model
{
    use SoftDeletes;

    public $table = 'movies';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'url',
        'author',
        'memo'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'url' => 'string',
        'author' => 'string',
        'memo' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
