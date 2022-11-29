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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::view('/generator', 'generator.create');

Route::get('/', function () {
    return view('generator.create');
});

// Route::get('/startApache', function () {
//     exec("C:/xampp/apache_start.bat", $output);
//     print_r($output);
// });

// Route::get('/stopApache', function () {
//     exec("C:/xampp/apache_start.bat", $output);
//     print_r($output);
// });

Route::get('/stopApache', 'App\Http\Controllers\GeneratorController@stop')->name('stopApache');
Route::get('/startApache', 'App\Http\Controllers\GeneratorController@start')->name('startApache');

Route::resource('generators', 'App\Http\Controllers\GeneratorController');