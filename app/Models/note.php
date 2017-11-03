<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class note
 * @package App\Models
 * @version November 3, 2017, 4:53 am UTC
 *
 * @property string title
 * @property string content
 * @property string auth
 */
class note extends Model
{
    use SoftDeletes;

    public $table = 'notes';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'title',
        'content',
        'auth'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'title' => 'string',
        'content' => 'string',
        'auth' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required',
        'content' => 'required',
        'auth' => 'required'
    ];

    
}
