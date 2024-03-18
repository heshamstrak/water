<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'product_id', 'quantity', 'price', 'weight_id'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }


    public function weight()
    {
        return $this->belongsTo(Weight::class);
    }
    
}
