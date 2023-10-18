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
    protected $guarded = [];

}
