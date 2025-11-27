<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\AdminMiddlweare;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\TaskController;
use App\Http\Controllers\Admin\EmployeeController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Employee\EmployeeDashboardController;

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/login', [HomeController::class, 'login'])->name('login-page');

//Auth & Admin Middleware Routes
Route::middleware(['auth', 'verified', AdminMiddleware::class])->group(function () {

    Route::get('/admin/dashboard', [DashboardController::class, 'dashboardPage'])->name('admin.dashboard');
    Route::resource('/admin/employees', EmployeeController::class)->names('admin.employees');
    Route::resource('/admin/task', TaskController::class)->names('admin.task');

});

/* Employee Dashboard Route start */
Route::get('/employee/dashboard', [EmployeeDashboardController::class, 'employeeDashboard'])->name('employee.dashboard');
/* Employee Dashboard Route End */


require __DIR__.'/auth.php';
