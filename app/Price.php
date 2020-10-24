<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    protected $fillable = ['product_id','from','to','price','discount'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
