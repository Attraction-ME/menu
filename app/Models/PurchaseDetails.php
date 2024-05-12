<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchaseDetails extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function invoice()
    {
        return $this->belongsTo(PurchaseInvoice::class, 'sale_invoice_id');
    }

}
