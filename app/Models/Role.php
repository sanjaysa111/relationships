<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Role extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    /**
     * [The users that belong to the role.]
     *
     * @return BelongsToMany
     * 
     */
    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'role_user', 'role_id', 'user_id')->withTimestamps();

        //Customizing The pivot Attribute Name
        // return $this->belongsToMany(User::class, 'role_user', 'role_id', 'user_id')
        //         ->as('author')
        //         ->withTimestamps();
    }
}
