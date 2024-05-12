<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $guarded =['id'];

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function shopCategory(){
        return $this->belongsTo(Category::class, 'shop_id');
    }
}
