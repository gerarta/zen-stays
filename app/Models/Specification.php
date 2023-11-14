<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specification extends Model
{
    use HasFactory;
    protected $table = "specifications";
    protected $timestamp= true;
    protected $primaryKey = 'id';
    protected $fillable = [
        'boarding_house_id',
        'specification_type_id',
        'description'
    ];
    protected $guarded = [];

    public function specification_type(){
        return $this->belongsTo(SpecificationType::class, 'specification_type_id');
    }
    public function boarding_house(){
        return $this->belongsTo(BoardingHouse::class, 'boarding_house_id');
    }
}
