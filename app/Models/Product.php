<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'main_description', 'description', 'ingredients', 'shipping_description', 'small_image', 'shipping_price', 'icon','type','count', 'visitor', 'price', 'discount', 'discount_type', 'category_id'];
    protected $appends = ['calculate_discount', 'icon_path', 'image_path'];

    //attr
    public function getImagePathAttribute()
    {
        return Storage::url('uploads/products/' . $this->small_image);
        
    }// end of getImagePathAttribute

    public function getIconPathAttribute()
    {
        return Storage::url('uploads/products/' . $this->icon);
        
    }// end of getImagePathAttribute



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
            $discountPercent = ($this->price - ($this->price * $this->discount/100));
            return $discountPercent;
        } elseif ($this->discount_type == 1) {
            return $price = $this->price - $this->discount;
        } else {
            return $this->price;
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
