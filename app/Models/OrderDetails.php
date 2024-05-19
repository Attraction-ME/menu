<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetails extends Model
{
    use HasFactory;
    protected $guarded =['id'];
    protected $appends = ['extraOptions'];
    protected $with = ['mainOption']; 

    public function orderr(){
        return $this->belongsTo(Order::class, 'order_id');
    }

    public function order_product(){
        return $this->belongsTo(Product::class, 'product_id');
    }

    public function extraOptions()
    {
        $extra_option_ids = json_decode($this->extra_option_ids);
        if ( is_array( $extra_option_ids ) ) {
            return ExtraOption::whereIn('id' , $extra_option_ids )->get();
        }
    }

    public function getExtraOptionsAttribute()
    {
        return $this->extraOptions();
    }

    public function mainOption()
    {
        return $this->belongsTo(MainOption::class, 'main_option_id', 'id');
    }
}
