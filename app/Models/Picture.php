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
    protected $fillable = [
        'boarding_house_id',
        'name',
        'type',
        'link'
    ];
    protected $guarded = [];

    public function boarding_house(){
        return $this->belongsTo(BoardingHouse::class, 'boarding_house_id');
    }
}
