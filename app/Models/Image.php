<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    protected $guarded =['id'];

    public function product(){
        return $this->belongsTo(Product::class, 'product_id');
    }


    # Overrides 
    
    public function delete()
    {
        if ($this->name && file_exists(   public_path( 'products/' . $this->name))) 
        {
            unlink(public_path( 'products/' .  $this->name));
        }

        return parent::delete();
    }

}
