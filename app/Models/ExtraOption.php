<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExtraOption extends Model
{
    use HasFactory;

    protected $guarded =['id'];

    # Relations 

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

}
