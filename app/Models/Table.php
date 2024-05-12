<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Table extends Model
{
    use HasFactory;
    protected $guarded =['id'];

    public function shop(){
        return $this->belongsTo(Shop::class, 'shop_id');
    }
    
     public function waiters()
    {
        return $this->belongsToMany(Waiter::class);
    }
}
