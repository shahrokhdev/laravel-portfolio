<?php

use App\Http\Controllers\contactController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\LessonController;
use App\Models\Category;
use App\Models\Course;
use App\Models\Instructor;
use App\Models\Skill;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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


/* get locale and back to related page */

Route::get('/setlocale', function (Request $request) {
    session(['locale' => $request->locale]);
    return back();
})->name('setLocale');

Route::view('/', 'home');
Route::view('/about', 'about');
Route::view('/projects', 'projects');
Route::view('/contact', 'contact');
Route::post('contact/store', [contactController::class, 'store'])->name("storeContact");

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
