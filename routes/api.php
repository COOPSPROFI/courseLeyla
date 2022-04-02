<?php

use App\Http\Controllers\Api\CourseController;
use App\Http\Controllers\Api\CourseRequestController;
use App\Http\Controllers\Api\ReviewController;
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

Route::resources([
    'courses' => CourseController::class,
    'courserequests' => CourseRequestController::class,
    'reviews' => ReviewController::class
]);
