<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpecificationType extends Model
{
    use HasFactory;
    protected $table = "specification_types";
    protected $timestamp= true;
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function specification(){
        return $this->hasMany(Specification::class);
    }
}
