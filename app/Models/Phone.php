<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Phone extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['user_id', 'phone'];

    /**
     * [Get the user that owns the phone.]
     *
     * @return BelongsTo
     * 
     */
    public function User():BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}