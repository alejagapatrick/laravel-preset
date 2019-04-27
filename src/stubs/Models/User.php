<?php

namespace App\Models;

use App\Models\Traits\HasUniqueSlug;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable, MustVerifyEmail, HasUniqueSlug;

    protected $dateFormat = 'Y-m-d H:i:sO';
    protected $dates = ['email_verified_at'];
    protected $fillable = [
        'name',
        'slug',
        'email',
        'password',
    ];
    protected $hidden = [
        'password',
        'remember_token',
    ];
}
