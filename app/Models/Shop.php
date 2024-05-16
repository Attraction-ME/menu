<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;
    protected $guarded =['id'];



    public function shopuser(){
        return $this->belongsTo(User::class, 'user_id');
    }
    
    public function currency(){
        return $this->belongsTo(Currency::class, 'currency_id');
    }

    public function product()
    {
        return $this->hasMany(Product::class);
    }
    public function waiter()
    {
        return $this->hasMany(Waiter::class);
    }
    
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
    public function tables()
    {
        return $this->hasMany(Table::class);
    }

    public function saleInvoice()
    {
        return $this->hasMany(SaleInvoice::class);
    }

    public function categories()
    {
        return $this->hasMany(Category::class);
    }
}
