<?php

use App\Http\Controllers\API\AttendancesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\EmployeeController;
use App\Http\Controllers\API\OfficesController;
use App\Http\Controllers\API\UsersController;
use App\Http\Controllers\API\RolesController;

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
//     // return $request->user();
// });


// Start Auth Controller
Route::post('v1/register', [AuthController::class, 'register'])->name('register');
Route::post('v1/login', [AuthController::class, 'login'])->name('api-auth-login');
// End Auth Controller

// Start Employee Controller
Route::post('v1/find-employee', [EmployeeController::class, 'find']);
// End Employee Controller


Route::group(['middleware' => ['auth:sanctum']], function () {

    // Start Users Controller
    Route::get('v1/get-users', [UsersController::class, 'index']);
    Route::get('v1/my-profile', [UsersController::class, 'profile']);
    // End Users Controller

    // Start Attendances Controller
    Route::get('v1/get-all-attendances', [AttendancesController::class, 'get_all_attendances']);
    Route::get('v1/get-my-attendances', [AttendancesController::class, 'get_my_attendances']);
    Route::post('v1/check_in', [AttendancesController::class, 'check_in']);
    Route::post('v1/check_out', [AttendancesController::class, 'check_out']);
    // End Attendances Controller

    // Start Offices Controller
    Route::get('v1/get-office', [OfficesController::class, 'index']);
    Route::post('v1/store-office', [OfficesController::class, 'store']);
    // End Offices Controller

    // Start Roles Controller
    Route::get('v1/get-roles', [RolesController::class, 'index']);
    Route::post('v1/store-roles', [RolesController::class, 'store']);
    // End Roles Controller

    // Start Auth Controller
    Route::post('v1/logout', [AuthController::class, 'logout']);
    // End Auth Controller
});
