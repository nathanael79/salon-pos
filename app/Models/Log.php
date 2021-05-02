<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    use HasFactory;

    public const CREATE = 'CREATE';
    public const READ = 'READ';
    public const UPDATE = 'UPDATE';
    public const DELETE = 'DELETE';

    protected $fillable = [
        'model',
        'model_id',
        'type',
        'data'
    ];
}
