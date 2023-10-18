<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spesification extends Model
{
    use HasFactory;
    protected $table = "spesifications";
    protected $timestamp= true;
    protected $primaryKey = 'id';
    protected $guarded = [];

}
