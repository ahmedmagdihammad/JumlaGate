<?php

namespace App\Dashboard;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = ['name_en','name_ar'];

    public    $tagRules = [
        'name_en'    => 'required | string | max:255 | unique:tags',
        'name_ar'   => 'required | string | max:255 | unique:tags',
    ];

}
