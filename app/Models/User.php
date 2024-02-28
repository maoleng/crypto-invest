<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class User extends Model
{

    use Notifiable;

    protected $fillable = [
        'name', 'email', 'image', 'created_at',
    ];

}
