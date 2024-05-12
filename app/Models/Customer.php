<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Customer extends Authenticatable
{
    use HasFactory;

    protected $table = 'customers';

    protected $fillable = ['name', 'email', 'password', 'address', 'phone'];

    public function order()
    {
        return $this->hasMany(Order::class);
    }

    public function saleInvoice()
    {
        return $this->hasMany(SaleInvoice::class);
    }
}
