<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Phone;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    /**
     * [Get the phone associated with the user.]
     *
     * @return HasOne
     * 
     */
    public function phone(): HasOne
    {
        return $this->hasOne(Phone::class);
    }

    /**
     * [Get the posts for the user.]
     *
     * @return HasMany
     * 
     */
    public function posts(): HasMany
    {
        return $this->hasMany(Post::class);
    }


    //has one of many relationship
    public function latestPost(): HasOne
    {
        return $this->hasOne(Post::class)->latestOfMany();
    }

    public function oldestPost(): HasOne
    {
        return $this->hasOne(Post::class)->oldestOfMany();
    }

    /**
     * Get the user's orders.
     */
    // public function orders(): HasMany
    // {
    //     return $this->hasMany(Order::class);
    // }

    /**
     * Get the user's samllest order.
     */
    // public function samllestOrder(): HasOne
    // {
    //     return $this->hasOne(Order::class)->ofMany('price', 'min');
    // }

    /**
     * Get the user's largest order.
     * [Converting "Many" Relationships To Has One Relationships]
     */
    // public function largestOrder(): HasOne
    // {
    //     return $this->orders()->one()->ofMany('price', 'max');
    // }

    /**
     * Get the current pricing for the product.
     */
    // public function currentPricing(): HasOne
    // {
    //     return $this->hasOne(Price::class)->ofMany([
    //         'published_at' => 'max',
    //         'id' => 'max',
    //     ], function (Builder $query) {
    //         $query->where('published_at', '<', now());
    //     });
    // }
}
