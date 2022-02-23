<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
    return view('index');
});
Route::get('/info', function () {
    return view('info');
});
Route::get('/exercise', function () {
    return view('exercise');
});
Route::get('/exercise2', function () {
    return view('exercise');
});
Route::get('/exercise3', function () {
    return view('exercise');
});
Route::get('/change-plan', function () {
    return view('change-plan');
});
Route::get('/success', function () {
    return view('success');
});



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/success', [App\Http\Controllers\HomeController::class, 'retSuccess']);
Route::post('info', [App\Http\Controllers\UserController::class, 'index']);
Route::post('/change-plan', [App\Http\Controllers\UserController::class, 'changePlan']);
// Route::post('info', [App\Http\Controllers\UserController::class, 'changeHeight']);
// Route::get('/exercise', [App\Http\Controllers\UserController::class, 'increaseDay']);
Route::get('/change-day', function(){

    $user = auth()->user();
    $user_id = $user->id;
    $new_day = $user->dayNum + 1;
    $query = DB::table('users')
        ->where('id', '=', $user_id)
        ->update([
            'dayNum' => $new_day,
        ]);

    // return view('home');
    return redirect('/home');
});

Auth::routes();

