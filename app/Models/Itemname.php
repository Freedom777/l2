<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Itemname
 *
 * @property $id
 * @property $name
 * @property $description
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Itemname extends Model
{
    
    static $rules = [
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','description'];



}
