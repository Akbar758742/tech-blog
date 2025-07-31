<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SubCategory extends Model
{
     public function category():BelongsTo
   {
       return $this->belongsTo(Category::class);
   }
}
