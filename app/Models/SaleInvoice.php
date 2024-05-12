<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SaleInvoice extends Model
{
    use HasFactory;
    protected $guarded = ['id'];



    public function details()
    {
        return $this->hasMany(SaleDetails::class);
    }

    public function customers(){
        return $this->belongsTo(Customer::class, 'customer_id');
    }
    public function shops(){
        return $this->belongsTo(Shop::class, 'shop_id');
    }
    public function orders(){
        return $this->belongsTo(Order::class, 'order_id');
    }

}

