<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function subCategories()
    {
        return $this->hasMany(SubCategory::class);
    }
}
