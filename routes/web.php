<?php

use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeControrall;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\PropertyController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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

Route::group( ['prefix' => LaravelLocalization::setLocale()], function () {
    Route::get( '/', [HomeControrall::class, 'home'] )->name( 'home' );

// property index route
    Route::get( '/location/{id}', [HomeControrall::class, 'singleLocation'] )->name( 'single-location' );
    Route::get( '/property/{id}', [PropertyController::class, 'single'] )->name( 'single-property' );
    Route::get( '/properties/', [PropertyController::class, 'index'] )->name( 'properties' );
    Route::get( '/page/{slug}', [HomeControrall::class, 'single'] )->name( 'page' );
    Route::post( '/property-inquiry/{id}', [ContactController::class, 'propertyInquiry'] )->name( 'property-inquiry' );

    Route::get( '/currency/{code}', [HomeControrall::class, 'currencyChange'] )->name( 'currency-change' );
} );

Route::middleware( ['auth'] )->group( function () {
    Route::get( '/dashboard', [DashboardController::class, 'index'] )->name( 'dashboard-index' );
    Route::get( '/dashboard/properties', [DashboardController::class, 'properties'] )->name( 'dashboard-properties' );
    Route::get( '/dashboard/add-property', [DashboardController::class, 'addProperty'] )->name( 'add-property' );
    Route::post( '/dashboard/create-property', [DashboardController::class, 'createProperty'] )->name( 'create-property' );

    // update property
    Route::post( '/dashboard/update-property/{id}', [DashboardController::class, 'updateProperty'] )->name( 'update-property' );

    // delete property
    Route::post( '/dashboard/delete-property/{id}', [DashboardController::class, 'deleteProperty'] )->name( 'delete-property' );

    // edit property
    Route::get( '/dashboard/edit-property/{id}', [DashboardController::class, 'editProperty'] )->name( 'edit-property' );

    // delete media
    Route::get( '/dashboard/delete-media/{media_id}', [DashboardController::class, 'deleteMedia'] )->name( 'delete-media' );

    // // admin location routes
    Route::get( '/dashboard/location', [LocationController::class, 'index'] )->name( 'dashboard-location' );
    Route::get( '/dashboard/create', [LocationController::class, 'create'] )->name( 'dashboard-create' );
    Route::get( '/dashboard/store', [LocationController::class, 'store'] )->name( 'dashboard-store' );
    Route::get( '/dashboard/edit/{id}', [LocationController::class, 'edit'] )->name( 'dashboard-edit' );
    Route::get( '/dashboard/update/{id}', [LocationController::class, 'update'] )->name( 'dashboard-update' );
    Route::post( '/dashboard/destroy/{id}', [LocationController::class, 'destroy'] )->name( 'dashboard-destroy' );

    // page
    Route::resource( 'dashboard-page', PageController::class );

} );

require __DIR__ . '/auth.php';
