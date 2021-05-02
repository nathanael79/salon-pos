<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    use HasFactory;

    public const IN = 'IN';
    public const OUT = 'OUT';

    protected $fillable = [
        'item_id',
        'value',
        'type'
    ];
}
