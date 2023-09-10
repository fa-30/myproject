<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $primaryKey="id";
    // protected $table="myProducts";
    // protected $primaryKey="product_id";
    // protected $fillable='product_name';
    protected $guarded=[];
    public $timestamps=false;

 // category data         ==> category id      hasone  == data category > product
    function category()
    {
        // hasOne   product_id => category
        return $this->belongsTo(Category::class);
    }
    public function orderProducts(): HasMany
    {
        return $this->hasMany(OrderProduct::class);
    }
}