<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenaltiesModel extends Model
{
    use HasFactory;
    protected $fillable = [
        'member_id',
        'transaction_id',
        'penalty_rate',
    ];

    protected $table = 'penalties';

    public function transaction(){
        return $this->belongsTo(TransactionsModel::class, 'transaction_id');
    }
}
