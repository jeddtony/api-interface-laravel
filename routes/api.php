<?php

use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\StaffController;
use App\Models\User;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('users', function() {
    $users = User::all();
    return response()->json([
        'users' => $users
    ]);
});
Route::get('staff', [StaffController::class, 'index']);

Route::get('departments', [DepartmentController::class, 'index']);