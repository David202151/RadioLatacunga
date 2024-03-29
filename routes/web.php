<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});


/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('admin-users')->name('admin-users/')->group(static function() {
            Route::get('/',                                             'AdminUsersController@index')->name('index');
            Route::get('/create',                                       'AdminUsersController@create')->name('create');
            Route::post('/',                                            'AdminUsersController@store')->name('store');
            Route::get('/{adminUser}/impersonal-login',                 'AdminUsersController@impersonalLogin')->name('impersonal-login');
            Route::get('/{adminUser}/edit',                             'AdminUsersController@edit')->name('edit');
            Route::post('/{adminUser}',                                 'AdminUsersController@update')->name('update');
            Route::delete('/{adminUser}',                               'AdminUsersController@destroy')->name('destroy');
            Route::get('/{adminUser}/resend-activation',                'AdminUsersController@resendActivationEmail')->name('resendActivationEmail');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::get('/profile',                                      'ProfileController@editProfile')->name('edit-profile');
        Route::post('/profile',                                     'ProfileController@updateProfile')->name('update-profile');
        Route::get('/password',                                     'ProfileController@editPassword')->name('edit-password');
        Route::post('/password',                                    'ProfileController@updatePassword')->name('update-password');
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('equipos')->name('equipos/')->group(static function() {
            Route::get('/',                                             'EquiposController@index')->name('index');
            Route::get('/create',                                       'EquiposController@create')->name('create');
            Route::post('/',                                            'EquiposController@store')->name('store');
            Route::get('/{equipo}/edit',                                'EquiposController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'EquiposController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{equipo}',                                    'EquiposController@update')->name('update');
            Route::delete('/{equipo}',                                  'EquiposController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('componentes')->name('componentes/')->group(static function() {
            Route::get('/',                                             'ComponentesController@index')->name('index');
            Route::get('/create',                                       'ComponentesController@create')->name('create');
            Route::post('/',                                            'ComponentesController@store')->name('store');
            Route::get('/{componente}/edit',                            'ComponentesController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'ComponentesController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{componente}',                                'ComponentesController@update')->name('update');
            Route::delete('/{componente}',                              'ComponentesController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('mantenimientos')->name('mantenimientos/')->group(static function() {
            Route::get('/',                                             'MantenimientoController@index')->name('index');
            Route::get('/create',                                       'MantenimientoController@create')->name('create');
            Route::post('/',                                            'MantenimientoController@store')->name('store');
            Route::get('/{mantenimiento}/edit',                         'MantenimientoController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'MantenimientoController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{mantenimiento}',                             'MantenimientoController@update')->name('update');
            Route::delete('/{mantenimiento}',                           'MantenimientoController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('solicitudes-mantenimientos')->name('solicitudes-mantenimientos/')->group(static function() {
            Route::get('/',                                             'SolicitudesMantenimientoController@index')->name('index');
            Route::get('/create',                                       'SolicitudesMantenimientoController@create')->name('create');
            Route::post('/',                                            'SolicitudesMantenimientoController@store')->name('store');
            Route::get('/{solicitudesMantenimiento}/edit',              'SolicitudesMantenimientoController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'SolicitudesMantenimientoController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{solicitudesMantenimiento}',                  'SolicitudesMantenimientoController@update')->name('update');
            Route::delete('/{solicitudesMantenimiento}',                'SolicitudesMantenimientoController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('users')->name('users/')->group(static function() {
            Route::get('/',                                             'UsersController@index')->name('index');
            Route::get('/create',                                       'UsersController@create')->name('create');
            Route::post('/',                                            'UsersController@store')->name('store');
            Route::get('/{user}/edit',                                  'UsersController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'UsersController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{user}',                                      'UsersController@update')->name('update');
            Route::delete('/{user}',                                    'UsersController@destroy')->name('destroy');
        });
    });
});