<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Gallery extends Model
{
    use HasFactory;
    protected $fillable = ['image'];
    protected $appends = ['image_path'];
    //attir
    public function getImagePathAttribute()
    {
        return Storage::url('uploads/galleries/' . $this->image);
        
    }// end of getImagePathAttribute

}
