<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserType extends Model
{
    use HasFactory;

    public const OFFICER = 'officer';
    public const MEMBER = 'member';

    protected $fillable = [
        'name'
    ];
}
