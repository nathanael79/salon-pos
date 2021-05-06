<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'information'
    ];

    public function transactionDetails(){
        return $this->hasMany(TransactionDetail::class,'transaction_detail_id','id');
    }
}
