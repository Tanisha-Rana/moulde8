<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Photographer extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'photographers';

    protected $fillable = [
        'name',
        'email',
        'phone',
        'password',
        'role_id'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
}