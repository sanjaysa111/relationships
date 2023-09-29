<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Car extends Model
{
    use HasFactory;

    protected $fillable = ['model', 'mechanic_id'];

    /**
     * [Get the owner associated with the car.]
     *
     * @return HasOne
     * 
     */
    public function owner(): HasOne
    {
        return $this->hasOne(Owner::class);
    }
}