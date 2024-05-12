<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guarded =['id'];


    public function shopproduct(){
        return $this->belongsTo(Shop::class, 'shop_id');
    }

    public function category(){
        return $this->belongsTo(Category::class, 'category_id');
    }


    public function images(){
        return $this->hasMany(Image::class);
    }
   
    public function Order_dtail(){
        return $this->hasMany(OrderDetails::class);
    }

    public function saleDetail(){
        return $this->hasMany(SaleDetails::class);
    }


}
