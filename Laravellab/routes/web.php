<?php
use App\Http\Controllers\CarController;


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
    return view('welcome');
});

Route::get('/car', 'CarController@allcars');
Route::get('/car/{id}', 'CarController@particularcar');
Route::post('/car', 'CarController@newcar');
Route::get('/addcar', 'CarController@addcar');

Route::get('/review/{id}', 'ReviewsController@getCarReviews');
Route::get('/review/car/{id}', 'ReviewsController@getCar');
Route::post('/review', 'ReviewsController@storeReview');
Route::get('/addreview', 'ReviewsController@addReview');

