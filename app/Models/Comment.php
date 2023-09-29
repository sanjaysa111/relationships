<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comment extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['post_id', 'comment'];

    /**
     * [Get the post that owns the commnets.]
     *
     * @return BelongsTo
     * 
     */
    public function post(): BelongsTo
    {
        return $this->belongsTo(Post::class);
    }
}