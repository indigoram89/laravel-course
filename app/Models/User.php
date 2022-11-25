<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * @property string $name
 * @property string $email
 * @property bool $admin
 */
class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $attributes = [
        'active' => true,
        'admin' => false,
    ];

    protected $fillable = [
        'name', 'email', 'avatar',
        'active', 'admin',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
}
