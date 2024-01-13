<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('landing_pages.index');
})->name('home');


//menu start

Route::get('/about', function () {
    return view('landing_pages.menu.about');
})->name('about');

Route::get('/service', function () {
    return view('landing_pages.menu.service');
})->name('service');

Route::get('/contact', function () {
    return view('landing_pages.menu.contact');
})->name('contact');

Route::get('/tour_packages', function () {
    return view('landing_pages.menu.tour_packages');
})->name('tour_packages');

// drop mwnu start

Route::get('/blog_travel', function () {
    return view('landing_pages.menu.drop_menu.blog');
})->name('blog_travel');

Route::get('/destination', function () {
    return view('landing_pages.menu.drop_menu.destination');
})->name('destination');

Route::get('/guide', function () {
    return view('landing_pages.menu.drop_menu.guide');
})->name('guide');

Route::get('/testimonial', function () {
    return view('landing_pages.menu.drop_menu.testimonial');
})->name('testimonial');

// drop mwnu end

//menu end


// user sub

Route::get('/profil', function () {
    return view('admin_master/user_sup/user_edit');
})->name('profil')->middleware(['auth']);;

//end user sub








Route::get('/dashboard', function () {
    return view('admin_master.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



// Route::resource('AnimeKu','App\Http\Controllers\AnimeKuController');
Route::resource('Users','App\Http\Controllers\UserController')->middleware(['auth']);
Route::resource('UserSetting','App\Http\Controllers\UserSettingController')->middleware(['auth']);;
Route::resource('Travel','App\Http\Controllers\TravelControllerController')->middleware(['auth']);

























require __DIR__.'/auth.php';
