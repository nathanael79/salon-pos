<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
    use HasFactory;

    public const ADMIN = 'ADMIN';
    public const CASHIER = 'CASHIER';

    protected $fillable = [
        'name'
    ];

    public function user(){
        return $this->hasMany(User::class, 'user_role_id', 'id');
    }
}
