<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Armor
 *
 * @property $id
 * @property $body_part
 * @property $crystallizable
 * @property $crystal_type
 * @property $crystal_count
 * @property $armor_type
 * @property $physical_defense
 * @property $magical_defense
 * @property $mp_bonus
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Armor extends Model
{
    
    static $rules = [
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['body_part','crystallizable','crystal_type','crystal_count','armor_type','physical_defense','magical_defense','mp_bonus'];



}
