<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wish extends Model
{
    use HasFactory;
    protected $table = "wishes";
    protected $timestamp= true;
    protected $primaryKey = 'id';
    protected $fillable = [
        'customer_id',
        'kost_id'
    ];
    protected $guarded = [];

    public function customer(){
        return $this->belongsTo(User::class, 'customer_id');
    }
    public function kost(){
        return $this->belongsTo(Kost::class, 'kost_id');
    }
}
