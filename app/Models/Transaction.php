<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    public const NEW = 'new';
    public const DRAFT = 'draft';
    public const PAID = 'paid';

    protected $fillable = [
        'UUID',
        'user_id',
        'discount',
        'total',
        'status',
        'customer_name'
    ];

    public function details(){
        return $this->hasMany(TransactionDetail::class, 'transaction_id', 'id');
    }
}
