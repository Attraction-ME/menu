<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guarded =['id'];

    protected $appends = ['hasMainOptions' , 'hasExtraOptions'];

    // accessors & mutators

    public function getHasMainOptionsAttribute()
    {
        return $this->mainOptions->count() > 0 ? true : false;
    }

    public function getHasExtraOptionsAttribute()
    {
        return $this->extraOptions->count() > 0 ? true : false;
    }


    # Relations
    public function shopproduct(){
        return $this->belongsTo(Shop::class, 'shop_id');
    }

    public function category(){
        return $this->belongsTo(Category::class, 'category_id');
    }


    public function images(){
        return $this->hasMany(Image::class);
    }
    
    public function Order_dtail(){
        return $this->hasMany(OrderDetails::class);
    }

    public function saleDetail(){
        return $this->hasMany(SaleDetails::class);
    }

    public function mainOptions()
    {
        return $this->hasMany(MainOption::class);
    }

    public function extraOptions()
    {
        return $this->hasMany(ExtraOption::class);
    }

    # Overrides 

    public function delete()
    {
        $this->mainOptions()?->delete();
        $this->extraOptions()?->delete();
        $this->images()?->delete();

        if ($this->image_temp && file_exists(   public_path( 'products/' . $this->image_temp))) 
        {
            unlink(public_path( 'products/' .  $this->image_temp));
        }

        parent::delete();
    }

}
