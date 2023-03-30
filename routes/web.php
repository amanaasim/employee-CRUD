<?php

use App\Http\Controllers\EmployeeController;
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

Route::get('/', function () {
    return view('employeeList');
});


Route::post("create-emp",   [EmployeeController::class, "create"]);
Route::post("delete-emp",   [EmployeeController::class, "delete"]);
Route::post("get-emp",      [EmployeeController::class, "getEmployeeDetails"]);
Route::post("update-emp",   [EmployeeController::class, "updateEmployeeDetails"]);

Route::get("get-emp-list",  [EmployeeController::class, "getEmployeesList"]);