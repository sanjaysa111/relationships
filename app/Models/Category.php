<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    /**
     * [Get the types associated with the category.]
     *
     * @return HasMany
     * 
     */
    public function types(): HasMany
    {
        return $this->hasMany(Type::class);
    }

    /**
     * [Get items through types.]
     *
     * @return HasManyThrough
     * 
     */
    public function items(): HasManyThrough
    {
        return $this->hasManyThrough(
            Item::class,
            Type::class,
            'category_id', // Foreign key on the types table...
            'type_id', // Foreign key on the items table...
            'id', // Local key on the category table...
            'id' // Local key on the types table...
        );

        // return $this->through('types')->has('items');

        // return $this->throughTypes()->hasItems();
    }
}
