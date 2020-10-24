<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "categories";

    protected $fillable = ['name_en','name_ar'];

    public    $categoryRules = [
        'name_en'    => 'required | string | max:255 | unique:categories',
        'name_ar'   => 'required | string | max:255 | unique:categories',
    ];
}
