<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'transaction_id',
        'service_id',
        'price',
        'discount',
        'total'
    ];

    public function service(){
        return $this->hasOne(Service::class, 'id', 'service_id');
    }

    public function transaction(){
        return $this->hasOne(Transaction::class, 'id', 'transaction_id');
    }

    public function officer(){
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
