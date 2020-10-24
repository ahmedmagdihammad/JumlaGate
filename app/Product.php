<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $fillable = [
        'company_id','category_id','name','prod_desc','shipping_pay_desc','min_quantity',
        'img_1','img_2','img_3','img_4','img_5','img_6','img_7','img_8','img_9','img_10'
    ];

    public $productRules = [
        'company_id'    => 'required',
        'category_id'   => 'required',
        'name'     => 'required | string | max:255',
        'prod_desc'     => 'required | string',
        'shipping_pay_desc'   => 'required | string',
        'min_quantity'     => 'required',
        'img_1'   => 'nullable | image|mimes:jpeg,png,jpg,svg',
        'img_2'   => 'nullable | image|mimes:jpeg,png,jpg,svg',
        'img_3'   => 'nullable | image|mimes:jpeg,png,jpg,svg',
        'img_4'   => 'nullable | image|mimes:jpeg,png,jpg,svg',
        'img_5'   => 'nullable | image|mimes:jpeg,png,jpg,svg',
        'img_6'   => 'nullable | image|mimes:jpeg,png,jpg,svg',
        'img_7'   => 'nullable | image|mimes:jpeg,png,jpg,svg',
        'img_8'   => 'nullable | image|mimes:jpeg,png,jpg,svg',
        'img_9'   => 'nullable | image|mimes:jpeg,png,jpg,svg',
        'img_10'   => 'nullable | image|mimes:jpeg,png,jpg,svg',
    ];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function category()
    {
        return $this->belongsTo(Company::class);
    }

    public function prices()
    {
        return $this->hasMany(Price::class);
    }

    public function features()
    {
        return $this->belongsToMany(Feature::class);
    }
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
