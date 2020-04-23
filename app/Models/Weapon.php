<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Weapon
 *
 * @property $id
 * @property $hands
 * @property $soulshot_count
 * @property $crystal_type
 * @property $crystal_count
 * @property $physical_damage
 * @property $weapon_type
 * @property $magical_damage
 * @property $speed
 * @property $critical
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Weapon extends Model
{
    
    static $rules = [
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['hands','soulshot_count','crystal_type','crystal_count','physical_damage','weapon_type','magical_damage','speed','critical'];



}
