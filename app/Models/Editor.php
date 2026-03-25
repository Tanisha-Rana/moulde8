<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Editor extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'editors';

    protected $fillable = [
        'name',
        'email',
        'phone',
        'password',
        'status'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
}
