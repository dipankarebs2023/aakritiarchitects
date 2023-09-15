<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\FrontPagesController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\web\WebHomeController;
use App\Http\Controllers\web\WebAboutController;
use App\Http\Controllers\web\WebProjectsController;
use App\Http\Controllers\web\WebServicesController;
use App\Http\Controllers\web\WebContactController;
use App\Http\Controllers\web\WebProjectsDetailsController;


/*
|--------------------------------------------------------------------------
| Web Routes - Frontend routes.
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes();
Route::get( '/', [WebHomeController::class, 'index' ] )->name( 'index' );
Route::get( '/about', [WebAboutController::class, 'about' ] );
Route::get( '/projects', [WebProjectsController::class, 'projects' ] );
Route::get( '/projects/{parma}', [WebProjectsDetailsController::class, 'projects_details' ] );
Route::get( '/services', [WebServicesController::class, 'services' ] );
Route::get( '/contact', [WebContactController::class, 'contact' ] );
Route::get( '/contact', [WebContactController::class, 'contact' ] );
