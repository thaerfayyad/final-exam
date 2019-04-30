<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable =[
        'name','description','price','size','colour','feature','categories_id'

    ];

    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}
