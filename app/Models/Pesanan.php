<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;
    protected $table = "pesanan";
    public $timestamps = false;
    protected $fillable = [
        'id',
        'user_id',
        'product_id',
        'order_number',
        'total',
    ];
}
