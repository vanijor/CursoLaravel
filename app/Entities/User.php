<?php

namespace App\Entities;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use SoftDeletes;
    use Notifiable;

    protected $fillable = [
        'cpf', 'phone', 'name', 'gender', 'birth', 'email', 'password', 'status', 'permission', 'notes'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    
    public function setPasswordAttribute($value)
    {   
        $this->attributes['password'] = env('PASSWORD_HASH') ? Hash::make($value) : $value;
    }
    
    
    
    
    
    
    
    
}