<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchaseInvoice extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function products()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

    public function details()
    {
        return $this->hasMany(PurchaseDetails::class);
    }

    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }

}

