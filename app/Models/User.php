<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class User
 *
 * @property $id
 * @property $name
 * @property $second_name
 * @property $created_at
 * @property $updated_at
 *
 * @property Contact[] $contacts
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class User extends Model
{

    static $rules = [
		'name' => 'required',
		'second_name' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','second_name'];

    /**
     * @var array
     */
    protected $with = ['contacts'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function contacts()
    {
        return $this->hasMany(Contact::class, 'user_id', 'id')->where('type', Contact::TYPE_PHONE);
    }


}
