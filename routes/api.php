<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\AuthController;

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

// ログインエンドポイントのroute
// ユーザーがemailとpasswordで認証を行うためのもの
Route::post('/login', [AuthController::class, 'login'])->name('login');;

// sanctumミドルウェアにより、 APIトークン か Cookie による
// 認証が無いとアクセスできない。
Route::middleware('auth:sanctum')->group(function () {
    Route::get('/users', [UserController::class, 'index']);    // ユーザー一覧
    Route::get('/users/{id}', [UserController::class, 'show']); // ユーザー詳細
    Route::post('/users', [UserController::class, 'store']);    // ユーザー作成
    Route::put('/users/{id}', [UserController::class, 'update']); // ユーザー更新
    Route::delete('/users/{id}', [UserController::class, 'destroy']); // ユーザー削除
});