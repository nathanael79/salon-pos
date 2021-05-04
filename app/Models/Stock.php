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
        'date',
        'item_id',
        'value',
        'type'
    ];

    public function item(){
        return $this->hasOne(Item::class, 'id', 'item_id');
    }

    public function setDateAttribute($value)
    {
        $this->attributes['date'] = date("Y-m-d", strtotime($value));
    }
}
