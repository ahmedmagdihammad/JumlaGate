<?php

namespace App;

use App\Dashboard\Category;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    /**
     * @var mixed|string
     */

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
    protected $fillable = ['name_en','name_ar','brief','address','phone_1','phone_2','email','logo','owner'];

    public $factoryRules = [
        'name_en'   => 'required | string | max:255',
        'name_ar'   => 'required | string | max:255',
        'owner'     => 'required | string | max:255',
        'email'     => 'required | email | max:255 | unique:companies',
        'address'   => 'required | string | max:255',
        'brief'     => 'required | string',
        'phone_1'   => 'required | unique:companies',
        'phone_2'   => 'nullable | unique:companies',
        'logo'      => 'nullable '
    ];
}
