<?php

use App\Http\Controllers\Welcome;
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

//  Route::get('/', function () {
//      return view('welcome'); });
Route::get('/', [Welcome::class, 'hero']);


Route::get('/user/sortLink', [Welcome::class, 'sort']);
Route::post('/user/sortLink', [Welcome::class, 'sort']);

Route::get('/user/linkthri', [Welcome::class, 'linkthri']);
// Route::post('/user/sortLink', [Welcome::class, 'sort']);

Route::get('/user/myprofile', [Welcome::class, 'profile']);
Route::post('/user/myprofile', [Welcome::class, 'profile']);


Route::get('/go/login', [Welcome::class, 'login']);
Route::get('/go/register', [Welcome::class, 'register']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::get('/{LINK}', [Welcome::class, 'temukan']);
