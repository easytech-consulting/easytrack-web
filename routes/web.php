<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::redirect('/', 'login');

//Route::redirect('/register', 'login');

//Auth::routes(['register' => false]);


/*
* Authentification
*/

Route::get('login', [
    'as' => 'login',
    'uses' => 'Auth\LoginController@login'
]);

Route::post('login', [
    'as' => 'login.post',
    'uses' => 'Auth\LoginController@loginPost'
]);

Route::get('register', [
    'as' => 'register',
    'uses' => 'Auth\RegisterController@index',
]);

Route::post('register', [
    'uses' => 'Auth\RegisterController@store',
    'as' => 'register.post'
]);

/*
* Password
*/
Route::get('password-forgot', [
    'as' => 'password-forgot',
    'uses' => 'Auth\ForgotPasswordController@index'
]);

Route::post('password-forgot', [
    'as' => 'password-forgot.post',
    'uses' => 'Auth\ForgotPasswordController@passwordRequest'
]);



Route::group(['middleware' => 'auth'], function() {
    Route::get('/dashboard', 'HomeController@dashboard');
    Route::get('logout', 'Admin\DashboardController@logout')->name('logout');

    Route::get('admin/dashboard', ['as'=> 'admin.dashboard','uses' => 'Admin\DashboardController@index']);
    Route::get('admin/profil',[ 'uses' => 'Admin\DashboardController@profile','as' => 'admin.profile']);
    Route::get('admin/profile/edit', ['uses' => 'Admin\DashboardController@profileEdit' , 'as' => 'admin.profile.edit']);
    Route::post('admin/profile/edit', ['uses' => 'Admin\DashboardController@profileUpdate' , 'as' => 'admin.profile.update']);
    Route::get('admin/profile/settings', ['uses' => 'Admin\DashboardController@profileSettings' , 'as' => 'admin.profile.settings']);

    Route::get('admin/sites', 'Admin\SiteController@index')->name('admin.sites');
    Route::post('admin/sites/add', 'Admin\SiteController@store');
    Route::post('admin/sites/update', 'Admin\SiteController@update');
    Route::post('admin/sites/destroy', 'Admin\SiteController@destroy');

    Route::get('admin/users', 'Admin\UserController@index')->name('admin.company.users');
    Route::post('admin/users', 'Admin\UserController@search')->name('admin.company.users.search');
    Route::get('admin/users/{user}/show', 'Admin\UserController@show')->name('admin.user.show');
    Route::get('admin/users/{user}/edit', 'Admin\UserController@edit')->name('admin.user.edit');
    Route::post('admin/users/{user}/edit', 'Admin\UserController@update');
    Route::post('admin/users/store', 'Admin\UserController@store');

    Route::post('admin/roles/detachPermissionToUser', 'Admin\RoleController@detachPermissionToUser');
    Route::post('admin/roles/attachPermissionToUser', 'Admin\RoleController@attachPermissionToUser');




    Route::get('easytrack/dashboard', ['as'=> 'easytrack.dashboard','uses' => 'SuperAdmin\DashboardController@index']);
    Route::get('easytrack/profil',[ 'uses' => 'SuperAdmin\DashboardController@profile','as' => 'easytrack.profile']);
    Route::get('easytrack/profile/edit', ['uses' => 'SuperAdmin\DashboardController@profileEdit' , 'as' => 'easytrack.profile.edit']);
    Route::post('easytrack/profile/edit', ['uses' => 'SuperAdmin\DashboardController@profileUpdate' , 'as' => 'easytrack.profile.update']);
    Route::get('easytrack/profile/settings', ['uses' => 'SuperAdmin\DashboardController@profileSettings' , 'as' => 'easytrack.profile.settings']);
    Route::get('easytrack/roles', 'SuperAdmin\RoleController@index')->name('easytrack.roles');

    Route::post('easytrack/roles/add', 'SuperAdmin\RoleController@store');
    Route::post('easytrack/roles/update', 'SuperAdmin\RoleController@update');
    Route::post('easytrack/roles/detachPermissionToRole', 'SuperAdmin\RoleController@detachPermissionToRole');
    Route::post('easytrack/roles/attachPermissionToRole', 'SuperAdmin\RoleController@attachPermissionToRole');


    Route::get('purchases', 'Employee\PurchaseController@index');
    

    Route::get('admin/sales/{sale}/show', 'Admin\SaleController@show')->name('admin.sales.show');
    Route::post('admin/sales/{sale}/status', 'Admin\SaleController@updateSaleStatus');
    Route::post('admin/sales/{sale}/validate', 'Admin\SaleController@validateSale');
    Route::post('admin/sales/{sale}/invalidate', 'Admin\SaleController@invalidateSale');
    Route::post('admin/sales', 'Admin\SaleController@store');
    Route::get('admin/kanban', 'Admin\SaleController@kanban')->name('admin.sales.kanban');
    Route::get('admin/sales', 'Admin\SaleController@index')->name('admin.sales.all');
    Route::get('admin/sales/site', 'Admin\SaleController@getElementBySite');
    Route::get('admin/pos', 'Admin\SaleController@create')->name('admin.sales.pos');


    Route::get('admin/purchases/{purchase}/show', 'Admin\PurchaseController@show')->name('admin.purchases.show');
    Route::post('admin/purchases/{purchase}/status', 'Admin\PurchaseController@updatePurchaseStatus');
    Route::post('admin/purchases/{purchase}/validate', 'Admin\PurchaseController@validatePurchase');
    Route::post('admin/purchases/{purchase}/invalidate', 'Admin\PurchaseController@invalidatePurchase');
    Route::post('admin/purchases/{purchase}', 'Admin\PurchaseController@edit');
    Route::get('admin/purchases/site', 'Admin\PurchaseController@getElementBySite');
    Route::post('admin/purchases', 'Admin\PurchaseController@store');
    Route::get('admin/purchases', 'Admin\PurchaseController@index')->name('admin.purchases');

    Route::get('admin/{site}/users', 'Admin\SiteController@users')->name('admin.site.employees');

    Route::post('admin/products/{product}', 'Admin\ProductController@update');
    Route::post('admin/products', 'Admin\ProductController@store');
    Route::get('admin/products','Admin\ProductController@index')->name('admin.products');
    
    Route::resource('admin/suppliers', 'Admin\SupplierController');
    Route::resource('easytrack/products', 'SuperAdmin\ProductController');
    Route::resource('easytrack/categories', 'SuperAdmin\CategoryController');
});




Route::group(['as'=>'superadmin.','prefix'=>'superadmin','middleware' => ['auth', 'active', 'superadmin']], function() {


    Route::get('dashboard', 'SuperAdmin\DashboardController@index')->name('dashboard');

    Route::get('user/profile/{id}', 'SuperAdmin\DashboardController@profile')->name('user.profile');
	Route::put('user/update_profile/{id}', 'SuperAdmin\DashboardController@profileUpdate')->name('user.profileUpdate');
	Route::put('user/changepass/{id}', 'SuperAdmin\DashboardController@changePassword')->name('user.password');
    Route::get('user/genpass', 'SuperAdmin\DashboardController@generatePassword');

});



Route::group(['as'=>'admin.','prefix'=>'admin','middleware' => ['auth', 'active', 'admin']], function() {



    //Term of sercice route
    Route::get('terms', 'HomeController@termOfService')->name('terms');
});

Route::group(['as'=>'user.','prefix'=>'user','middleware' => ['auth', 'active', 'user']], function() {

    //Route::get('/', 'HomeController@index');
    Route::get('dashboard', 'User\DashboardController@index')->name('dashboard');

    Route::get('user/profile/{id}', 'Admin\DashboardController@profile')->name('user.profile');
	Route::put('user/update_profile/{id}', 'UserController@profileUpdate')->name('user.profileUpdate');
	Route::put('user/changepass/{id}', 'UserController@changePassword')->name('user.password');
	Route::get('user/genpass', 'UserController@generatePassword');
});
