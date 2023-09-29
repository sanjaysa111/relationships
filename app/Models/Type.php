<?php

namespace App\Models;

use App\Models\Item;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Type extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'category_id'];

    /**
     * [Get the category that owns the type.]
     *
     * @return BelongsTo
     * 
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * [Get the items accosiated with the Type]
     *
     * @return HasMany
     * 
     */
    public function items(): HasMany
    {
        return $this->hasMany(Item::class);
    }
}
