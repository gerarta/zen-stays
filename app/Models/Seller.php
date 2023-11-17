<?php

namespace App\Models;

use App\Models\Kost;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Seller extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $guard = "seller";
    protected $table = "sellers";
    protected $timestamp= true;
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'password',
        'email',
        'phone_number',
        'dob',
        'gender',
    ];
    protected $guarded = [];

    public function kost(){
        return $this->hasMany(Kost::class);
    }
}
