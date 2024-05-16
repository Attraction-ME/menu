<?php 

namespace App\Services;

use App\Models\Product;

class ProductService
{

  public function addNewMainOptions($request , $product)
  {
    if ( $request->main_options_length > 0 ) 
    {
        foreach( range(1, $request->main_options_length)  as $index => $value)
        {

            $request->validate([
                "main_option_name_$value" => ['required' , 'string' , 'max:255'],
                "main_option_price_$value" => ['required' , 'numeric' , 'min:0'], 
            ]);

            $product->mainOptions()->create([
                'name' => $request["main_option_name_$value"],
                'price' => $request["main_option_price_$value"],
            ]);

        }
    }
  }

  public function addNewExtraOptions($request , $product)
  {
    if ( $request->extra_options_length > 0 ) 
    {
        foreach( range(1, $request->extra_options_length)  as $index => $value)
        {
            $request->validate([
                "extra_option_name_$value" => ['required' , 'string' , 'max:255'],
                "extra_option_price_$value" => ['required' , 'numeric' , 'min:0'],
            ]);

            $product->extraOptions()->create([
                'name' => $request["extra_option_name_$value"],
                'price' => $request["extra_option_price_$value"],
            ]);
        }
    }
  }

  public function updateMainOptions($request , $product)
  {
    if ( $product->mainOptions->count() > 0 ) 
    {
        foreach( range( 1 , $product->mainOptions->count() )  as $index => $value) 
        {

            $request->validate([
                "current_main_option_id_$value" => ['required' , 'exists:main_options,id'],
                "current_main_option_name_$value" => ['required' , 'string' , 'max:255'],
                "current_main_option_price_$value" => ['required' , 'numeric' , 'min:0'], 
            ]);

            $product->mainOptions()->where('id', $request["current_main_option_id_$value"])->update([
                'name' => $request["current_main_option_name_$value"],
                'price' => $request["current_main_option_price_$value"],
            ]);

        }
    }
  }

  public function updateExtraOptions($request , $product)
  {
    if ( $product->extraOptions->count() > 0 ) 
    {
        foreach( range( 1 , $product->extraOptions->count() )  as $index => $value) 
        {

            $request->validate([
                "current_extra_option_id_$value" => ['required' , 'exists:extra_options,id'],
                "current_extra_option_name_$value" => ['required' , 'string' , 'max:255'],
                "current_extra_option_price_$value" => ['required' , 'numeric' , 'min:0'], 
            ]);

            $product->extraOptions()->where('id', $request["current_extra_option_id_$value"])->update([
                'name' => $request["current_extra_option_name_$value"],
                'price' => $request["current_extra_option_price_$value"],
            ]);

        }
    }
  }

}