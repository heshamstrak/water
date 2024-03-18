<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'product_id', 'quantity', 'price', 'weight_id', 'notes', 'type'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function weight()
    {
        return $this->belongsTo(Weight::class);
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
}
