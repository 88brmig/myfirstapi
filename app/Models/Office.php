<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Lumen\Auth\Authorizable;

class Office extends Model implements AuthenticatableContract, AuthorizableContract
{
    use Authenticatable, Authorizable, HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = ['name', 'city_id'];


    public function users()
    {
        return $this->hasMany(User::class);
    }
    public function city()
    {
        return $this->belongsTo(City::class);
    }
    public function address()
    {
        return $this->hasOne(Address::class);
    }
    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
}
