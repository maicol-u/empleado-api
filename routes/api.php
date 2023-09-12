<?php

use App\Http\Controllers\EmployeeController;
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


Route::get('empleados', [EmployeeController::class, 'index']);
Route::get('empleados/{id}', [EmployeeController::class, 'findById']);
Route::get('empleados/find-email/{email}', [EmployeeController::class, 'findByEmail']);
Route::get('empleados/find-salary', [EmployeeController::class, 'findBySalary']);