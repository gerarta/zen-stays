<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpesificationType extends Model
{
    use HasFactory;
    protected $table = "spesification_types";
    protected $timestamp= true;
    protected $primaryKey = 'id';
    protected $guarded = [];

}
