<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Owner extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'car_id '];

    /**
     * [Get the cars that owns the owner.]
     *
     * @return BelongsTo
     * 
     */
    public function cars(): BelongsTo
    {
        return $this->belongsTo(Car::class);
    }
}
