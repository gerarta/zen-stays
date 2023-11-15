<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BoardingHouse extends Model
{
    use HasFactory;
    protected $table = "boarding_houses";
    protected $timestamp= true;
    protected $primaryKey = 'id';
    protected $fillable = [
        'seller_id',
        'name',
        'address',
        'fixed_quota',
        'temp_quota',
        'rules',
        'price',
        'gender',
        'rating',
    ];
    protected $guarded = [];

    public function seller(){
        return $this->belongsTo(Seller::class, 'seller_id');
    }
    public function specification(){
        return $this->hasMany(Specification::class);
    }
    public function picture(){
        return $this->hasMany(Picture::class);
    }
    public function wish(){
        return $this->hasMany(Wish::class);
    }
    public function review(){
        return $this->hasMany(Review::class);
    }
    public function booking(){
        return $this->hasMany(Booking::class);
    }
    
}
