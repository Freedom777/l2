<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Item
 *
 * @property $id
 * @property $name
 * @property $type
 * @property $material_type
 * @property $icon
 * @property $weight
 * @property $price
 * @property $slot_bit_type
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Item extends Model
{
    
    static $rules = [
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','type','material_type','icon','weight','price','slot_bit_type'];

    /**
     * @var array
     */
    protected $with = ['itemname', 'armor', 'weapon'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function itemname()
    {
        return $this->hasOne(Itemname::class, 'id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function armor()
    {
        return $this->hasOne(Armor::class, 'id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function weapon()
    {
        return $this->hasOne(Weapon::class, 'id', 'id');
    }

}
