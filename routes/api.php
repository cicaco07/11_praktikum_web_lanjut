<?php

use App\Http\Controllers\ApiAuthController;
use App\Http\Controllers\MahasiswaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:sanctum')->group(function(){
    Route::apiResource('/mahasiswa', MahasiswaController::class);
    Route::get('/logout', [ApiAuthController::class, 'logout']);
});

Route::post('/login', [ApiAuthController::class, 'login']);

Route::post('/register', [ApiAuthController::class, 'register']);

// Praktikum 1
// Route::get('/hello', function(){
//     $data=["message"=>"hello world"];
//     return response()->json($data);
// });

// Route::get('hello', function(){
//     return "hello world";
// });


//Praktikum 2
// Route::apiResource('/mahasiswa', MahasiswaController::class);