<?php

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
     Route::apiResource('career', CareerController::class);
    Route::apiResource('course', CourseController::class);
    Route::apiResource('location', LocationController::class);
    Route::apiResource('permission', PermissionController::class);
    Route::apiResource('permissionType', PermissionTypeController::class);
    Route::apiResource('roles', RolesController::class);
    Route::apiResource('users', UsersController::class);

