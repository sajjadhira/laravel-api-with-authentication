<?php

use App\Http\Controllers\CoinsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/coins', [CoinsController::class, 'index']);

Route::group(
    ['middleware' => ['auth:sanctum']], function(){
        Route::post('coins', [CoinsController::class,'store']); 
        Route::put('coins/{id}', [CoinsController::class,'update']); 
        Route::delete('coins/{id}', [CoinsController::class,'destroy']); 
    }
);

// Route::resource('coins', CoinsController::class);
Route::get('/coins/search/{name}', [CoinsController::class, 'search']);
// Route::post('/coins', [CoinsController::class, 'store']);