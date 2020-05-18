<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Radio
 * @package App\Models
 * @version March 17, 2020, 3:13 am UTC
 *
 * @property \App\Models\Category categories
 * @property \App\Models\Country countries
 * @property string title
 * @property string image
 * @property string description
 * @property string link
 * @property integer categories_id
 * @property integer countries_id
 */
class Radio extends Model
{
    use SoftDeletes;

    public $table = 'radios';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'title',
        'image',
        'description',
        'link',
        'categories_id',
        'countries_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'title' => 'string',
        'image' => 'string',
        'description' => 'string',
        'link' => 'string',
        'categories_id' => 'integer',
        'countries_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required',
        'image' => 'required',
        'description' => 'required',
        'link' => 'required',
        'categories_id' => 'required',
        'countries_id' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function categories()
    {
        return $this->belongsTo(\App\Models\Category::class, 'categories_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function countries()
    {
        return $this->belongsTo(\App\Models\Country::class, 'countries_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function radios_id()
    {
        return $this->belongsTo(\App\Models\Radio::class, 'id');

    }
}
