<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'email', 'phone','message', 'status', 'reply_id'];
    protected $appends = ['reply'];
    public function msg_reply()
    {
        return $this->hasOne(Contact::class, 'reply_id', 'id')->get(); 
    }

    public function getReplyAttribute() {
        if($this->status == 0) {
            return '<span class="badge badge-danger">Pending</span>';
        } else {
            return '<span class="badge badge-primary">Replied</span>';
        }
    }// end of getReplyAttribute

}
