<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected $table = 'categorys';	

    protected $fillable = ['categoryName'];

    public function products()
    {
    	return $this->hasMany('\App\Products');
    }
}
