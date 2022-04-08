<?php

namespace App\Models;
use App\Models\Category;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_name',
        'image',
        'categories_id',
   ];
   public function category(){
       return $this->belongsTo(Category::class,'categories_id');
   }
}
