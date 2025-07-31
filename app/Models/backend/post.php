<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class post extends Model
{

    use HasFactory;
   public function images():HasMany
   {
       return $this->hasMany(Upload::class, 'post_id', 'id');
   }
    public function firstImage():HasOne
   {
       return $this->hasOne(Upload::class, 'post_id', 'id')->oldestOfMany();
   }







//     public function firstImage():HasOne
//    {
//        return $this->hasOne(Upload::class, 'post_id', 'id')->oldestOfMany();
//    }

//     public function subCategory():BelongsTo
//     {
//         return $this->belongsTo(SubCategory::class, 'sub_category_id', 'id');
//     }

//     public function uploads()
//     {
//         return $this->hasMany(Upload::class, 'post_id', 'id');
//     }
}
