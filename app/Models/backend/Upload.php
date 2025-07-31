<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Model;

class Upload extends Model
{
   public function post()
   {
       return $this->belongsTo(Post::class, 'post_id', 'id');
   }
}
