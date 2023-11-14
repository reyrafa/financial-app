<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentsModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'transaction_id',
        'payment_amount',
        'payment_date',
        'remaining_balance',
    ];

    protected $table = 'payments';

    public function transaction(){
        return $this->belongsTo(TransactionsModel::class, 'transaction_id');
    }
}
