<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Post extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['user_id', 'title', 'description'];

    /**
     * [Description for user]
     *
     * @return BelongsTo
     * 
     */
    /**
     * [Get the user that owns the post.]
     *
     * @return BelongsTo
     * 
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * [Get the comments for the blog post.]
     *
     * @return HasMany
     * 
     */
    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }
}
