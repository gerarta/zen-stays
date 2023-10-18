<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Picture extends Model
{
    use HasFactory;
    protected $table = "pictures";
    protected $timestamp= true;
    protected $primaryKey = 'id';
    protected $guarded = [];

}
