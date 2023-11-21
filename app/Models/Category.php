<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory,SoftDeletes;

    public function product()
    {
        return $this->hasMany(Product::class);
    }

    public function productsub()
    {
        return $this->hasMany(Product::class,'subcategory_id');
    }

    public function article()
    {
        return $this->hasMany(Article::class);
    }

    public function children()
  {
    return $this->hasMany(Category::class,'parent_id');
  }
}
