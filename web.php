<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\github;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Route::view('/git1','github');
Route::post('/git1',[github::class,'web']);
// Route::get('git1', function() {
//     return view ('index');
// });

Route::view('github2.blade.php','github2');
Route::post('github2.blade.php',[github::class,'web']);
// Route::get('index2.blade.php', function() {
//     return view ('index2');
// });



Route::view('github3', 'affichage');
Route::post('github3',[github::class,'web']);
// Route::get('index3.blade.php', function() {
//     return view ('index3');
// });