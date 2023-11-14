<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $table = "bookings";
    protected $timestamp= true;
    protected $primaryKey = 'id';
    protected $fillable = [
        'customer_id',
        'boarding_house_id',
        'start_date',
        'end_date',
        'is_confirmed',
        'is_ongoing',
        'total_amount',
        'temp_amount',
    ];
    protected $guarded = [];

    public function customer(){
        return $this->belongsTo(User::class, 'customer_id');
    }
    public function boarding_house(){
        return $this->belongsTo(BoardingHouse::class, 'boarding_house_id');
    }
    public function payment(){
        return $this->hasMany(Payment::class);
    }
}
