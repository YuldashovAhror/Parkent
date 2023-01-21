<?php

use App\Http\Controllers\Dashboard\AboutController;
use App\Http\Controllers\Dashboard\ApartmentController;
use App\Http\Controllers\Dashboard\BannerController;
use App\Http\Controllers\Dashboard\BuildingController;
use App\Http\Controllers\Dashboard\HeaderController;
use App\Http\Controllers\Dashboard\NewsController;
use App\Http\Controllers\Dashboard\PlanController;
use App\Http\Controllers\Dashboard\ProjectController;
use App\Http\Controllers\Dashboard\RoomController;
use App\Http\Controllers\Dashboard\SecondAboutController;
use App\Http\Controllers\Dashboard\SecondBannerController;
use App\Http\Controllers\Front\WelcomeController;
use App\Models\Project;
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
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::group(['prefix'=>'dashboard'], function (){
    Route::name('dashboard.')->group(function (){   
        Route::resource('/header', HeaderController::class);
        Route::resource('/news', NewsController::class);
        Route::resource('/secondbanner', SecondBannerController::class);
        Route::resource('/secondabout', SecondAboutController::class);
        Route::resource('/about', AboutController::class);
        Route::resource('/banner', BannerController::class);
        Route::resource('/project', ProjectController::class);
        Route::resource('/building', BuildingController::class);
        Route::resource('/apartment', ApartmentController::class);
        Route::resource('/plan', PlanController::class);
        Route::resource('/room', RoomController::class);

    });
});


///// Front Routes //////
Route::resource('/', WelcomeController::class);

require __DIR__.'/auth.php';
