<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    public $timestamps = false;
    use HasFactory;


    protected $fillable = [
        'name',
        'phone',
        'email',
        'membership_type',
        'join_date',
    ];

}