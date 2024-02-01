<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class About extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'icon'];

    protected $appends = ['icon_path'];

    //attr
    public function getIconPathAttribute()
    {
        return Storage::url('uploads/icons/' . $this->icon);
        
    }// end of getPosterPathAttribute

}
