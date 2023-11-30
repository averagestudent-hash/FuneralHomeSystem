<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deceased extends Model
{
    use HasFactory;

    protected $fillable = [
        'customerID',
        'fname',
        'mname',
        'lname',
        'relationship',
        'causeofdeath',
        'sex',
        'religion',
        'age',
        'dateofbirth',
        'dateofdeath',
        'placeofdeath',
        'citizenship',
        'address',
        'civilstatus',
        'occupation',
        'namecemetery',
        'addresscemetery',
        'nameFather',
        'nameMother',
    ];

  
}
