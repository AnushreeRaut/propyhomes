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
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\TopProjectController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::post('/subscribe', [SubscriptionController::class, 'subscribe'])->name('subscribe');


Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/property/home', [HomeController::class, 'property'])->name('propertypage');
Route::get('/home/loan', [HomeController::class, 'homeloan'])->name('homeloan');

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


Route::middleware(['auth'])->group(function () {
Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard');
Route::resource('employees', EmployeeController::class);
Route::resource('references', ReferenceController::class);
Route::resource('customers', CustomerController::class);
Route::get('phone_requests', [PhoneRequestController::class, 'index'])->name('phone_requests.index');
Route::delete('phone_requests/{id}', [PhoneRequestController::class, 'destroy'])->name('phone_requests.destroy');

// Route::post('/customers/store', [CustomerController::class, 'store'])->name('customers.store');
Route::post('/family/store', [FamilyController::class, 'store'])->name('family.store');
Route::get('/subscriptions', [SubscriptionController::class, 'index'])->name('subscriptions.index');
Route::delete('/subscriptions/{id}', [SubscriptionController::class, 'destroy'])->name('subscriptions.destroy');

Route::get('/project/create', [ProjectController::class, 'index'])->name('projects.index');
});
