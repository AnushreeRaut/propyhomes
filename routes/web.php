<?php


use App\Http\Controllers\AuthController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\FamilyController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewProjectController;
use App\Http\Controllers\PhoneRequestController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ReferenceController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\TopProjectController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.store');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::post('/subscribe/propy', [SubscriptionController::class, 'subscribe'])->name('subscribe.propy');
Route::post('/check-email', [SubscriptionController::class, 'checkEmail'])->name('check.email');

// Registration Route
Route::get('/register/customer', function () {
    return view('auth.register'); // Ensure you have this view file
})->name('register.form');
Route::post('/register', [RegisterController::class, 'register'])->name('register');

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/property/home', [HomeController::class, 'property'])->name('propertypage');
Route::get('/home/loan', [HomeController::class, 'homeloan'])->name('homeloan');

Route::middleware(['auth'])->group(function () {
    // Route::middleware(['permission:view_index'])->group(function () {
        Route::get('/projects/{id}/show', [ProjectController::class, 'show'])->name('projects.show');
        Route::get('/lotusresidency', [TopProjectController::class, 'viewlotus'])->name('viewlotus');
        Route::get('/krishnaprabha', [TopProjectController::class, 'viewkrishna'])->name('viewkrishna');
        Route::get('/mahendra', [TopProjectController::class, 'viewmahendra'])->name('mahendra');
        Route::get('/orchid', [TopProjectController::class, 'vieworchid'])->name('orchid');
        Route::get('/insight', [TopProjectController::class, 'viewinsight'])->name('insight');
        Route::get('/anjaneja', [TopProjectController::class, 'viewanjaeja'])->name('anjaeja');

        Route::get('/balaji', [NewProjectController::class, 'viewbalaji'])->name('viewbalaji');
        Route::get('/bella', [NewProjectController::class, 'viewbella'])->name('viewbella');
        Route::get('/elite', [NewProjectController::class, 'viewmaelite'])->name('viewmaelite');
        Route::get('/vedant', [NewProjectController::class, 'viewvedant'])->name('viewvedant');
        Route::post('phone_requests', [PhoneRequestController::class, 'store'])->name('phone_requests.store');
    });
// });

Route::middleware(['auth'])->group(function () {
    // Dashboard route with specific permission
    Route::get('/dashboard', [AuthController::class, 'dashboard'])
        ->name('dashboard')
        ->middleware('permission:view_dashboard');

    // Employee routes
    Route::middleware(['permission:view_employee'])->group(function () {
        Route::resource('employees', EmployeeController::class);
    });

    // Reference routes
    Route::middleware(['permission:view_referral'])->group(function () {
        Route::resource('references', ReferenceController::class);
    });

    // Customer routes
    Route::middleware(['permission:view_customer'])->group(function () {
        Route::resource('customers', CustomerController::class);
    });

    // Phone Requests routes
    Route::middleware(['permission:view_phone'])->group(function () {
        Route::get('phone_requests', [PhoneRequestController::class, 'index'])
            ->name('phone_requests.index');
        Route::delete('phone_requests/{id}', [PhoneRequestController::class, 'destroy'])
            ->name('phone_requests.destroy');
    });

    // Family routes
    Route::middleware(['permission:view_family'])->group(function () {
        Route::post('/family/store', [FamilyController::class, 'store'])
            ->name('family.store');
    });

    // Subscription routes
    Route::middleware(['permission:view_reports'])->group(function () {
        Route::get('/subscriptions', [SubscriptionController::class, 'index'])
            ->name('subscriptions.index');
        Route::delete('/subscriptions/{id}', [SubscriptionController::class, 'destroy'])
            ->name('subscriptions.destroy');
    });

    // Project routes
    Route::middleware(['permission:view_projects'])->group(function () {
        Route::get('/project/create', [ProjectController::class, 'index'])
            ->name('projects.index');
            Route::get('/project/create/create', [ProjectController::class, 'index'])
            ->name('projects.create');
        Route::post('/projects/store', [ProjectController::class, 'store'])
            ->name('projects.store');
    });
});


// Route::middleware(['auth'])->group(function () {
// Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard');
// Route::resource('employees', EmployeeController::class);
// Route::resource('references', ReferenceController::class);
// Route::resource('customers', CustomerController::class);
// Route::get('phone_requests', [PhoneRequestController::class, 'index'])->name('phone_requests.index');
// Route::delete('phone_requests/{id}', [PhoneRequestController::class, 'destroy'])->name('phone_requests.destroy');

// // Route::post('/customers/store', [CustomerController::class, 'store'])->name('customers.store');
// Route::post('/family/store', [FamilyController::class, 'store'])->name('family.store');
// Route::get('/subscriptions', [SubscriptionController::class, 'index'])->name('subscriptions.index');
// Route::delete('/subscriptions/{id}', [SubscriptionController::class, 'destroy'])->name('subscriptions.destroy');

// Route::get('/project/create', [ProjectController::class, 'index'])->name('projects.index');

// Route::post('/projects/store', [ProjectController::class, 'store'])->name('projects.store');

// });
