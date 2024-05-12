<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $guarded =['id'];

  

    public function table(){
        return $this->belongsTo(Table::class, 'table_id');
    }

    public function shop_order(){
        return $this->belongsTo(Shop::class, 'shop_id');
    }

    public function order_details()
    {
        return $this->hasMany(OrderDetails::class);
    }

    public function saleInvoice()
    {
        return $this->hasMany(SaleInvoice::class);
    }
}
