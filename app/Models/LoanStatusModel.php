<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoanStatusModel extends Model
{
    use HasFactory;
    public $timestamps =false;

    protected $fillable = [
        'status_name',
        'description'
    ];
    protected $table = 'loan_status';

}
