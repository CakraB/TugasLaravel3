<?php

use App\Http\Controllers\CompanyContoller;
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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::get('/company', 'CompanyController@getCompany');

Route::get('/company-employee', 'CompanyController@getCompanyEmployee');

Route::get('/employee', 'EmployeeController@getEmployee');

Route::post('/event-create', 'EventController@store');

Route::get('/event', 'EventController@getEvent');

Route::get('/event-company-employee', 'EventController@getEventCompanyEmployee');

Route::post('/login','AuthController@login');

Route::post('/register','AuthController@register');

