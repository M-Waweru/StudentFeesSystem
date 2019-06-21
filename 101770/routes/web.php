<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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
    return view('101770.welcome');
});

// Route::resource([
//     'students' => 'StudentController',
//     'fees' => 'FeesController'
// ]);

Route::resource('students', 'StudentController');
Route::get('studentsdetails', 'StudentController@showAll');
Route::get('search', 'StudentController@show');

Route::resource('fees', 'FeesController');