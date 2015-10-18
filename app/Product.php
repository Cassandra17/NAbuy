<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'desc', 'price','pic'];

    public static function relationArrayWithCache()
    {
        return \Cache::remember('all_purchased_products', $minutes = 60, function()
        {
            return \DB::table('product_purchase')->get();
        });
    }
    
    public static function productsArrayWithCache()
    {
        return \Cache::remember('all_products', $minutes = 60, function()
        {
            return \DB::table('products')->get();
        });
    }
}
