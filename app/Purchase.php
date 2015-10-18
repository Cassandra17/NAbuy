<?php

namespace App;

use Laracasts\Presenter\PresentableTrait;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['orderName'];

    use PresentableTrait;
    
    public $presenter = 'App\PurchasePresenter';

    public function purchases()
    {
    	return $this->belongsToMany('App\Product', 'product_purchase');
    }

    public function users()
    {
    	return $this->belongsToMany('App\User', 'purchase_user');
    }

}
