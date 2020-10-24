<?php

Auth::routes();

Route::get('language/{lang}', function ($lang) {
    Session::put('locale', $lang);
    return back();
})->name('change_language');

// Route Sign In
Route::get('/signin', 'Frontend\\SigninController@index')->name('signin');
Route::post('/signin/create', 'Frontend\\SigninController@create')->name('signin.create');

// Route Sign Up
Route::get('/signup', 'Frontend\\SignupController@index')->name('signup');
Route::post('/signup/create', 'Frontend\\SignupController@create')->name('signup.create');

Route::group(['middleware' => ['web']], function () {
    // Route Home Page
    Route::get('/', 'Frontend\\HomeController@index')->name('/');
    Route::get('/searchProduct', 'Frontend\\HomeController@searchProduct')->name('searchProduct');

    Route::get('/contact', 'Frontend\\HomeController@contact')->name('contact');
    
    // Route Factories
    Route::get('/allfactories', 'Frontend\\HomeController@allfactories')->name('allfactories');

    // Route Categories
    Route::get('/allcategories', 'Frontend\\AllCategoriesController@index')->name('allcategories');
    Route::get('/allcategories/{id}', 'Frontend\\AllCategoriesController@show')->name('allcategories.show');
    Route::get('/showcategory/{id}', 'Frontend\\AllCategoriesController@showcategory')->name('showcategory.show');
    Route::get('/serchCatgeory', 'Frontend\\AllCategoriesController@serchCatgeory')->name('serchCatgeory');
    
    // Route Products Page
    Route::get('/allproducts', 'Frontend\\AllProductController@index')->name('allproducts');
    Route::get('/allproducts/{id}', 'Frontend\\AllProductController@show')->name('product.show');
    Route::get('/filterProduct', 'Frontend\\AllProductController@filterProduct')->name('filterProduct');

    
});

Route::group(['middleware' => ['customer']], function () {
    // Route Pofile
    Route::get('/myaccount', 'Frontend\\MyaccountController@index')->name('myaccount');

    // Route Cart
    Route::get('/cart', 'Frontend\\HomeController@cart')->name('cart');
});

Route::get('register', function(){
    return redirect('dashboard/admins');
});

Route::prefix('dashboard')->name('dashboard.')->namespace('Dashboard')->middleware('auth')->group(function(){
    Route::view('', 'dashboard.index')->name('index');
    Route::post('/images','ProductController@uploadImages');
    Route::post('/getCategories','CompanyController@getCompanyCategories')->name('getCompanyCategories');;
    Route::resources([
        'admins' => 'AdminController',
        'traders' => 'UserController',
        'companies' => 'CompanyController',
        'products' => 'ProductController',
        'tags' => 'TagController',
        'categories' => 'CategoryController',
        'settings'      => 'SettingController',
        'statistics'    => 'StatisticsController',
    ]);
});

Route::get('/foo',function(){
    Artisan::call('migrate');
    dd('done');
});
