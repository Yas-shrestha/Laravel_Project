<?php

use Illuminate\Support\Facades\Route;
use Illuminate\support\Facades\Auth;
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



Auth::routes();

Route::resource('/', 'App\Http\Controllers\indexFrController');
Route::resource('/portfolios', 'App\Http\Controllers\portfolioFrController');
Route::resource('/abouts', 'App\Http\Controllers\aboutFrController');
Route::resource('/blogSingles', 'App\Http\Controllers\blogSingleFrController');
Route::resource('/blogs', 'App\Http\Controllers\blogFrController');
Route::resource('/portfolioDetails', 'App\Http\Controllers\portfolioDetailFrController');
Route::resource('/pricings', 'App\Http\Controllers\pricingFrController');
Route::resource('/services', 'App\Http\Controllers\serviceFrController');
Route::resource('/teams', 'App\Http\Controllers\teamFrController');
Route::resource('/testimonials', 'App\Http\Controllers\testimonialFrController');
Route::resource('/contacts', 'App\Http\Controllers\contactsFrController');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('/')->middleware('auth')->group(function () {
    Route::get('admin', function () {
        if (Auth::user()->role == 1) {
            return view('Company.admin.index');
        } else {
            return redirect('/');
        }
    });
    Route::resource('admin/admin', 'App\Http\Controllers\AdminController');
    Route::resource('admin/file', 'App\Http\Controllers\FilesController');
    Route::resource('admin/feature', 'App\Http\Controllers\FeaturesController');
    Route::resource('admin/about', 'App\Http\Controllers\AboutsController');
    Route::resource('admin/blog', 'App\Http\Controllers\BlogsController');
    Route::resource('admin/blogsingle', 'App\Http\Controllers\BlogsingleController');
    Route::resource('admin/client', 'App\Http\Controllers\ClientsController');
    Route::resource('admin/contactFrontend', 'App\Http\Controllers\ContactFrontendController');
    Route::resource('admin/portfolio', 'App\Http\Controllers\PortfoliosController');
    Route::resource('admin/pricing', 'App\Http\Controllers\PricingsController');
    Route::resource('admin/portfoliodetail', 'App\Http\Controllers\PortfoliodetailsController');
    Route::resource('admin/service', 'App\Http\Controllers\ServicesController');
    Route::resource('admin/slider', 'App\Http\Controllers\SlidersController');
    Route::resource('admin/skill', 'App\Http\Controllers\SkillsController');
    Route::resource('admin/team', 'App\Http\Controllers\TeamsController');
    Route::resource('admin/testimonial', 'App\Http\Controllers\TestimonialsController');
});