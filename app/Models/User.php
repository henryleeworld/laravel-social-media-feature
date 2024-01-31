<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Rennokki\Befriended\Contracts\Blocking;
use Rennokki\Befriended\Contracts\Following;
use Rennokki\Befriended\Contracts\Liking;
use Rennokki\Befriended\Scopes\FollowFilterable;
use Rennokki\Befriended\Traits\Block;
use Rennokki\Befriended\Traits\Follow;
use Rennokki\Befriended\Traits\Like;

class User extends Authenticatable implements Blocking, Following, Liking
{
    use Block, Follow, FollowFilterable, HasApiTokens, HasFactory, Like, Notifiable;

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
}
