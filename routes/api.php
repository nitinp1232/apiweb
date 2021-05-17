<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Apicontroller;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route:: get('/get/{id?}', [Apicontroller::class,'get']);
Route:: post('/post', [Apicontroller::class,'post']);
Route:: put('/put/{id?}', [Apicontroller::class, 'put']);
Route:: delete('/delete/{id?}', [Apicontroller::class, 'delete']);
Route:: get('/search/{name?}', [Apicontroller::class, 'search']);

