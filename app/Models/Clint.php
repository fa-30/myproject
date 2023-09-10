<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clint extends Model
{
    protected $primaryKey="id";
  
    protected $guarded=[];
    public $timestamps=false;
    use HasFactory;
    function orders()
    {
        // hasOne   product_id => category
        return $this->hasMany(order::class);
    }
 
}
