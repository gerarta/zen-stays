<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentProvider extends Model
{
    use HasFactory;
    protected $table = "payment_providers";
    protected $timestamp= true;
    protected $primaryKey = 'id';
    protected $guarded = [];

}
