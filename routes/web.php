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

Route::get('/', function () {
    return view('auth.login');
});

/*Auth::routes();*/

/*Route::get('/home', 'HomeController@index')->name('home');*/

// Authentication Routes...
$this->get('login', 'Auth\LoginController@showLoginForm')->name('auth.login');
$this->post('login', 'Auth\LoginController@login')->name('auth.login');
$this->get('logout', 'Auth\LoginController@logout')->name('auth.logout');


Route::group(['middleware' => ['auth']], function() {

    Route::get('/home', 'HomeController@index');

    Route::resource('users','UserController');

    Route::get('user/applicant', 'UserController@applicantIndex')->name('users.applicant.index');
    Route::get('user/applicant/create', 'UserController@applicantCreate');
    Route::post('user/applicant/create', 'UserController@applicantStore');
    Route::get('user/applicant/{id}', 'UserController@applicantShow')->name('users.applicant.show');
    Route::get('user/applicant/{id}/edit', 'UserController@applicantEdit')->name('users.applicant.edit');
    Route::patch('user/applicant/{id}', 'UserController@applicantUpdate')->name('users.applicant.update');
    Route::delete('user/applicant/{id}', 'UserController@applicantDestroy')->name('users.applicant.destroy');

    /*Route::get('user/staffs', 'UserController@staff');
    Route::get('user/staffs/create', 'UserController@staffCreate');
    Route::post('user/staffs/create', 'UserController@staffStore');
    Route::get('user/staffs/{id}', 'UserController@staffShow');
    Route::get('user/staffs/{id}/edit', 'UserController@staffEdit');
    Route::patch('user/staffs/{id}', 'UserController@staffUpdate');
    Route::delete('user/staffs/{id}', 'UserController@staffDestroy');*/

    Route::get('roles',['as'=>'roles.index','uses'=>'RoleController@index','middleware' => ['permission:role-list|role-create|role-edit|role-delete']]);
    Route::get('roles/create',['as'=>'roles.create','uses'=>'RoleController@create','middleware' => ['permission:role-create']]);
    Route::post('roles/create',['as'=>'roles.store','uses'=>'RoleController@store','middleware' => ['permission:role-create']]);
    Route::get('roles/{id}',['as'=>'roles.show','uses'=>'RoleController@show']);
    Route::get('roles/{id}/edit',['as'=>'roles.edit','uses'=>'RoleController@edit','middleware' => ['permission:role-edit']]);
    Route::patch('roles/{id}',['as'=>'roles.update','uses'=>'RoleController@update','middleware' => ['permission:role-edit']]);
    Route::delete('roles/{id}',['as'=>'roles.destroy','uses'=>'RoleController@destroy','middleware' => ['permission:role-delete']]);

    /*
     * Generally settings
     * */
    Route::get('settings', 'GeneralSettingsController@settings')->name('general.settings');

    /*
     * Users Profile
     * */
    Route::get('user/profile', 'ProfileController@index')->name('users.profile');

});