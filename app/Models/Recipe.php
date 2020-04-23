<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Recipe
 *
 * @property $recipe_id
 * @property $item_id
 * @property $level
 * @property $mp
 * @property $output
 * @property $npc_fee
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Recipe extends Model
{
    
    static $rules = [
		'recipe_id' => 'required',
		'item_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['recipe_id','item_id','level','mp','output','npc_fee'];



}
