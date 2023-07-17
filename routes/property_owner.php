<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PropertyOwner\LoginController;
use App\Http\Controllers\PropertyOwner\ShiftController;
use App\Http\Controllers\PropertyOwner\GuardsController;
use App\Http\Controllers\PropertyOwner\ReportsController;
use App\Http\Controllers\PropertyOwner\RegisterController;
use App\Http\Controllers\PropertyOwner\DashboardController;
use App\Http\Controllers\PropertyOwner\PropertiesController;

Route::get('/', [LoginController::class, 'login'])->name('property_owner.login');
Route::post('/login-check', [LoginController::class, 'loginCheck'])->name('property_owner.loginCheck');
Route::get('/forgot-password', [LoginController::class, 'forgetPassword'])->name('property_owner.forgetPassword');
Route::get('/sign-up', [RegisterController::class, 'signUp'])->name('property_owner.signUp');
Route::get('/log-out', [LoginController::class, 'logOut'])->name('property_owner.logOut');

Route::group(['prefix' => 'property-owner'], function () {

    Route::get('verify-email', [RegisterController::class, 'verify_email'])->name('dashboard.verify_email');
    Route::get('add-phone', [RegisterController::class, 'add_phone'])->name('dashboard.add_phone');
    Route::get('completed', [RegisterController::class, 'completed'])->name('dashboard.completed');
    Route::get('company-details', [RegisterController::class, 'company_details'])->name('dashboard.company_details');
    Route::get('select-plan', [RegisterController::class, 'select_plan'])->name('dashboard.select_plan');
    Route::get('billing-address', [RegisterController::class, 'billing_address'])->name('dashboard.billing_address');
    Route::get('payment', [RegisterController::class, 'payment'])->name('dashboard.payment');

    Route::get('dashboard', [DashboardController::class, 'propertyOwnerDashboard'])->name('property-owner.dashboard');

    Route::prefix('/guards')->group(function () {
        Route::get('all', [GuardsController::class, 'all'])->name('property_owner.guards.all');
        Route::get('add', [GuardsController::class, 'add'])->name('property_owner.guards.add-guard');
        Route::get('edit', [GuardsController::class, 'edit'])->name('property_owner.guards.edit-guard');
    });

    Route::prefix('/properties')->group(function () {
        Route::get('all', [PropertiesController::class, 'all'])->name('property_owner.properties.all');
        Route::get('create', [PropertiesController::class, 'create'])->name('property_owner.properties.create');
        Route::get('shift', [PropertiesController::class, 'shift'])->name('property_owner.properties.shift');
        Route::get('checkpoints', [PropertiesController::class, 'checkpoints'])->name('property_owner.properties.checkpoints');
        Route::get('morningShift', [PropertiesController::class, 'morningShift'])->name('property_owner.properties.morningShift');
        Route::get('routes', [PropertiesController::class, 'routes'])->name('property_owner.properties.routes');
        Route::get('assignGuards', [PropertiesController::class, 'assignGuards'])->name('property_owner.properties.assignGuards');
    });

    Route::prefix('/reports')->group(function () {
        Route::get('all', [ReportsController::class, 'all'])->name('property_owner.reports.all');
        Route::get('delete', [ReportsController::class, 'delete'])->name('property_owner.reports.add-guard');
    });

    Route::prefix('/shift')->group(function () {
        Route::get('all', [ShiftController::class, 'all'])->name('property_owner.shift.all');
        Route::get('edit', [ShiftController::class, 'edit'])->name('property_owner.shift.create-guard');
        Route::get('checkpoint', [ShiftController::class, 'checkpoint'])->name('property_owner.shift.shift-guard');
        Route::get('checkpointEdit', [ShiftController::class, 'checkpointEdit'])->name('property_owner.shift.checkpoints-guard');
        Route::get('assignGuards', [ShiftController::class, 'assignGuards'])->name('property_owner.shift.morningShift-guard');
    });
});
