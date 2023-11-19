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
        'kost_id',
        'name',
        'type',
        'link'
    ];
    protected $guarded = [];

    public function kost(){
        return $this->belongsTo(Kost::class, 'kost_id');
    }
}
