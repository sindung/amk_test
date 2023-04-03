<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ExtracurricularController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderItemController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Models\ClassRoom;
use App\Models\Extracurricular;
use App\Models\Teacher;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home');
})->name('home')->middleware('auth');

Route::get('/about', function () {
    return view('about');
})->middleware('auth');

Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth');

Route::post('/login', [AuthController::class, 'authLogin'])->middleware('guest');

// customer
Route::get('/customers', [CustomerController::class, 'index'])->middleware(['auth', 'must-admin']);
Route::get('/orders', [OrderController::class, 'index'])->middleware('auth');
Route::get('/order-item', [OrderItemController::class, 'index'])->middleware('auth');
Route::get('/item', [ItemController::class, 'index'])->middleware('auth');

Route::get('/customers-deleted', [CustomerController::class, 'deleted'])->middleware(['auth', 'must-admin']);
Route::get('/orders-deleted', [OrderController::class, 'deleted'])->middleware(['auth', 'must-admin']);
Route::get('/order-item-deleted', [OrderItemController::class, 'deleted'])->middleware(['auth', 'must-admin']);
Route::get('/item-deleted', [ItemController::class, 'deleted'])->middleware(['auth', 'must-admin']);

Route::get('/customers-restore/{id}', [CustomerController::class, 'restore'])->middleware(['auth', 'must-admin']);
Route::get('/orders-restore/{id}', [OrderController::class, 'restore'])->middleware('auth');
Route::get('/order-item-restore/{id}', [OrderItemController::class, 'restore'])->middleware('auth');
Route::get('/item-restore/{id}', [ItemController::class, 'restore'])->middleware(['auth', 'must-admin']);

Route::get('/customers/{id}', [CustomerController::class, 'show'])->middleware(['auth', 'must-admin']);
Route::get('/orders/{id}', [OrderController::class, 'show'])->middleware('auth');
Route::get('/order-item/{id}', [OrderItemController::class, 'show'])->middleware('auth');
Route::get('/item/{id}', [ItemController::class, 'show'])->middleware(['auth', 'must-admin']);

Route::get('/customers-add', [CustomerController::class, 'create'])->middleware(['auth', 'must-admin']);
Route::get('/orders-add', [OrderController::class, 'create'])->middleware('auth');
Route::get('/order-item-add', [OrderItemController::class, 'create'])->middleware('auth');
Route::get('/item-add', [ItemController::class, 'create'])->middleware(['auth', 'must-admin']);

Route::post('/customers', [CustomerController::class, 'store'])->middleware(['auth', 'must-admin']);
Route::post('/orders', [OrderController::class, 'store'])->middleware('auth');
Route::post('/order-item', [OrderItemController::class, 'store'])->middleware('auth');
Route::post('/item', [ItemController::class, 'store'])->middleware(['auth', 'must-admin']);

Route::get('/customers-edit/{id}', [CustomerController::class, 'edit'])->middleware(['auth', 'must-admin']);
Route::get('/orders-edit/{id}', [OrderController::class, 'edit'])->middleware(['auth', 'must-admin']);
Route::get('/order-item-edit/{id}', [OrderItemController::class, 'edit'])->middleware(['auth', 'must-admin']);
Route::get('/item-edit/{id}', [ItemController::class, 'edit'])->middleware(['auth', 'must-admin']);

Route::put('/customers/{id}', [CustomerController::class, 'update'])->middleware(['auth', 'must-admin']);
Route::put('/orders/{id}', [OrderController::class, 'update'])->middleware(['auth', 'must-admin']);
Route::put('/order-item/{id}', [OrderItemController::class, 'update'])->middleware(['auth', 'must-admin']);
Route::put('/item/{id}', [ItemController::class, 'update'])->middleware(['auth', 'must-admin']);

Route::get('/customers-delete/{id}', [CustomerController::class, 'delete'])->middleware(['auth', 'must-admin']);
Route::get('/orders-delete/{id}', [OrderController::class, 'delete'])->middleware(['auth', 'must-admin']);
Route::get('/order-item-delete/{id}', [OrderItemController::class, 'delete'])->middleware(['auth', 'must-admin']);
Route::get('/item-delete/{id}', [ItemController::class, 'delete'])->middleware(['auth', 'must-admin']);

Route::delete('/customers-destroy/{id}', [CustomerController::class, 'destroy'])->middleware(['auth', 'must-admin']);
Route::delete('/orders-destroy/{id}', [OrderController::class, 'destroy'])->middleware(['auth', 'must-admin']);
Route::delete('/order-item-destroy/{id}', [OrderItemController::class, 'destroy'])->middleware(['auth', 'must-admin']);
Route::delete('/item-destroy/{id}', [ItemController::class, 'destroy'])->middleware(['auth', 'must-admin']);

// student
// Route::get('/students', [StudentController::class, 'index'])->middleware('auth');
// Route::get('/class', [ClassController::class, 'index'])->middleware('auth');
// Route::get('/extracurricular', [ExtracurricularController::class, 'index'])->middleware('auth');
// Route::get('/teacher', [TeacherController::class, 'index'])->middleware('auth');

// Route::get('/student/{id}', [StudentController::class, 'show'])->middleware('auth');
// Route::get('/class/{id}', [ClassController::class, 'show'])->middleware('auth');
// Route::get('/extracurricular/{id}', [ExtracurricularController::class, 'show'])->middleware('auth');
// Route::get('/teacher/{id}', [TeacherController::class, 'show'])->middleware('auth');

// Route::get('/students-add', [StudentController::class, 'create'])->middleware('auth');
// Route::get('/class-add', [ClassController::class, 'create'])->middleware('auth');
// Route::get('/extracurricular-add', [ExtracurricularController::class, 'create'])->middleware('auth');
// Route::get('/teacher-add', [TeacherController::class, 'create'])->middleware('auth');

// Route::post('/student', [StudentController::class, 'store'])->middleware('auth');
// Route::post('/class', [ClassController::class, 'store'])->middleware('auth');
// Route::post('/extracurricular', [ExtracurricularController::class, 'store'])->middleware('auth');
// Route::post('/teacher', [TeacherController::class, 'store'])->middleware('auth');

// Route::get('/student-edit/{id}', [StudentController::class, 'edit'])->middleware('auth');
// Route::get('/class-edit/{id}', [ClassController::class, 'edit'])->middleware('auth');
// Route::get('/extracurricular-edit/{id}', [ExtracurricularController::class, 'edit'])->middleware('auth');
// Route::get('/teacher-edit/{id}', [TeacherController::class, 'edit'])->middleware('auth');

// Route::put('/student/{id}', [StudentController::class, 'update'])->middleware('auth');
// Route::put('/class/{id}', [ClassController::class, 'update'])->middleware('auth');
// Route::put('/extracurricular/{id}', [ExtracurricularController::class, 'update'])->middleware('auth');
// Route::put('/teacher/{id}', [TeacherController::class, 'update'])->middleware('auth');

// Route::get('/student-delete/{id}', [StudentController::class, 'delete'])->middleware('auth');
// Route::get('/class-delete/{id}', [ClassController::class, 'delete'])->middleware('auth');
// Route::get('/extracurricular-delete/{id}', [ExtracurricularController::class, 'delete'])->middleware('auth');
// Route::get('/teacher-delete/{id}', [TeacherController::class, 'delete'])->middleware('auth');

// Route::delete('/student-destroy/{id}', [StudentController::class, 'destroy'])->middleware('auth');
// Route::delete('/class-destroy/{id}', [ClassController::class, 'destroy'])->middleware('auth');
// Route::delete('/extracurricular-destroy/{id}', [ExtracurricularController::class, 'destroy'])->middleware('auth');
// Route::delete('/teacher-destroy/{id}', [TeacherController::class, 'destroy'])->middleware('auth');
