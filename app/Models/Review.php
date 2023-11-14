<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    protected $table = "reviews";
    protected $timestamp= true;
    protected $primaryKey = 'id';
    protected $fillable = [
        'customer_id',
        'boarding_house_id',
        'review',
        'rating',
    ];
    protected $guarded = [];

    public function customer(){
        return $this->belongsTo(User::class, 'customer_id');
    }
    public function boarding_house(){
        return $this->belongsTo(BoardingHouse::class, 'boarding_house_id');
    }
}
