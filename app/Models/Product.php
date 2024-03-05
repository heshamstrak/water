<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'main_description', 'description', 'shipping_description', 'count', 'visitor', 'price', 'discount', 'discount_type', 'category_id'];
    protected $appends = ['calculate_discount'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function images()
    {
        return $this->hasMany(File::class);
    }

    //attr
    public function getCalculateDiscountAttribute()
    {
        if($this->discount_type == 0) {
            $discountPercent = (($this->price - $this->discount) * 100) / $this->price;
            return $discountPercent;
        } elseif ($this->discount_type == 1) {
            return $price = $this->price - $this->discount;
        }
        
    }// end of getCalculateDiscountAttribute

    public function ingredients()
    {
        return $this->belongsToMany(Ingredient::class);
    }

    public function weights()
    {
        return $this->belongsToMany(Weight::class);
    }

}
