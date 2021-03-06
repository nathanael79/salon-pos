<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class User extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'username',
        'email',
        'password',
        'telephone',
        'user_role_id',
        'user_type_id'
    ];

    protected $hidden = [
        'password',
        'user_role_id',
        'user_type_id'
    ];

    public function user_role(){
        return $this->hasOne(UserRole::class, 'id', 'user_role_id');
    }

    public function user_type(){
        return $this->hasOne(UserType::class, 'id', 'user_type_id');
    }

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = Hash::make($value);
    }
}
