<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetails extends Model
{
    use HasFactory;
    protected $guarded =['id'];

    public function orderr(){
        return $this->belongsTo(Order::class, 'order_id');
    }

    public function order_product(){
        return $this->belongsTo(Product::class, 'product_id');
    }
}
