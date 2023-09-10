<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $guarded=[];
    function clint()
    {
        return $this->belongsTo(Clint::class);
    }
    function products()
    {
        return $this->belongsToMany(Product::class);
    }
    public function orderProducts(): HasMany
{
    return $this->hasMany(OrderProduct::class);
}
}