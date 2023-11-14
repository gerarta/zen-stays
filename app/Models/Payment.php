<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    public $table = 'payments';
    public $primaryKey = 'id';
    public $fillable = [
        'booking_id',
        'payment_provider_id',
        'account_name',
        'account_number',
        'is_confirmed',
        'payment_proof',
        'amount',
    ];

    public function booking(){
        return $this->belongsTo(Booking::class, 'booking_id');
    }
    public function payment_provider(){
        return $this->belongsTo(PaymentProvider::class, 'payment_provider_id');
    }
}
