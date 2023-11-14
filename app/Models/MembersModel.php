<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MembersModel extends Model
{
    use HasFactory;
    protected $fillable = [
        "fname",
        "mname",
        "lname",
        "full_name",
        "age",
        "birth_date",
        "address",
        "email"
    ];
    protected $table = 'members';
}
