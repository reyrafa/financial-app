<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionsModel extends Model
{
    use HasFactory;
    protected $fillable = [
        'member_id',
        'loan_amount',
        'annual_interest',
        'loan_term_year',
        'amortization_amount',
        'loan_status_id',
    ];

    protected $table = 'transactions';

    public function members(){
        return $this->belongsTo(MembersModel::class, 'member_id');
    }

    public function loan_status(){
        return $this->belongsTo(LoanStatusModel::class, 'loan_status_id');
    }
}
