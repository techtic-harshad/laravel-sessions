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
     
    $collection = collect([1, 2, 3, 4, 5, 6, 7]);


    $collection1 = $collection->collect();


    
 
$chunks = $collection->chunk(3);
 
$chunks->all();


     dd($chunks);
    foreach ($users as $user) {
        echo $user->name;
    }
});

Route::post('image', [App\Http\Controllers\HomeController::class, 'imageUpload']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
