<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class WeaponSa
 *
 * @property $id
 * @property $item_id
 * @property $ingredient_id
 * @property $quantity
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class WeaponSa extends Model
{
    
    static $rules = [
		'item_id' => 'required',
		'ingredient_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['item_id','ingredient_id','quantity'];



}
