<?php

namespace App\Models;

use App\Models\Car;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;

class Mechanic extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    /**
     * [ Get the car associated with the mechanic.]
     *
     * @return HasOne
     * 
     */
    public function car(): HasOne
    {
        return $this->hasOne(Car::class);
    }

    /**
     * [Get the car's owner.]
     *
     * @return HasOneThrough
     * 
     */
    public function carOwner(): HasOneThrough
    {
        // if relationships is already define between them.
        return $this->hasOneThrough(
            Owner::class,
            Car::class,
            'mechanic_id', // Foreign key on the cars table...
            'car_id', // Foreign key on the owners table...
            'id', // Local key on the mechanics table...
            'id' // Local key on the cars table...
        );

        // if relationships is already define between mech->car->owner
        // return $this->through('car')->has('owner');

        // Dynamic syntax...
        // return $this->throughCar()->hasOwner();
    }
}
