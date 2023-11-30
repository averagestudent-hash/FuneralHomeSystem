<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'userID',
        'fname',
        'lname',
        'age',
        'sex',
        'address',
        'contact',
        'idtype',
        'custimage',
        'custvalidid',
        'custgcashqr',
    ];

}
