<?php
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\MyMiddleware;
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

// Route::get('/', function () {
//     return view('login');
// });
Route::get('/', 'LoginController@ShowLogin')->name('login');
Route::post('/Login', 'LoginController@Login')->name('login');
Route::get('/dashboard', 'DashboardController@Show')->name('dashboard');
Route::get('/logout', 'LoginController@logout')->name('logout');
// Route::get('/logout', 'LoginController@logout');