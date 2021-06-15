<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'name',
        'email',
        'address',
        'phone',
        'status',
        'total',
        'payments',
        'cusId'
    ];

    protected $table ='orders';

}
