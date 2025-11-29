<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\AdminMiddlweare;
use App\Http\Middleware\EmployeeMiddleware;
use App\Http\Controllers\Admin\TaskController;
use App\Http\Controllers\Admin\EmployeeController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\TaskAssignController;
use App\Http\Controllers\Employee\CommentController;
use App\Http\Controllers\Employee\ProfileController;
use App\Http\Controllers\Admin\CompleteTaskController;
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
Route::middleware(['auth', AdminMiddleware::class])->group(function () {
    Route::prefix('admin')->group(function(){
        Route::get('/dashboard', [DashboardController::class, 'dashboardPage'])->name('admin.dashboard');
        Route::resource('/employees', EmployeeController::class)->names('admin.employees');
        Route::resource('/task', TaskController::class)->names('admin.task');

        /* Task Assign Route  */
        Route::get('/task/assign/{id}', [TaskAssignController::class, 'taskAssignPage'])->name('admin.task.assign');
        Route::post('/task/assign/{id}', [TaskAssignController::class, 'assignTask'])->name('task.assign');
        Route::get('/task/unassign/{id}', [TaskAssignController::class, 'unassignTask'])->name('task.unassign');

        /* Complete Approved Task Route */
        Route::get('/complete-task', [CompleteTaskController::class, 'completeTaskPage'])->name('admin.task.complete');
        Route::get('/approve-task', [CompleteTaskController::class, 'approveTaskPage'])->name('admin.task.approve');
        Route::get('/approve-task/{id}', [CompleteTaskController::class, 'approveTask'])->name('admin.approve');
    });
});

//Auth & Employee Middleware Routes
Route::middleware(['auth', EmployeeMiddleware::class])->group(function () {

    Route::prefix('employee')->group(function(){
        Route::get('/dashboard', [EmployeeDashboardController::class, 'employeeDashboard'])->name('employee.dashboard');
        Route::get('/task', [EmployeeDashboardController::class, 'employeeTasks'])->name('employee.tasks');
        Route::get('/show-task/{id}', [EmployeeDashboardController::class, 'showTask'])->name('employee.task.show');

        Route::get('/complete-task/{id}', [EmployeeDashboardController::class, 'completeTask'])->name('employee.task.complete');

        //Employees Related Profile Route
        Route::get('/profile', [ProfileController::class, 'profilePage'])->name('employee.profile');
        Route::put('/profile-update', [ProfileController::class, 'updateProfile'])->name('employee.profile.update');
        
        Route::get('/reset-password', [ProfileController::class, 'resetPasswordPage'])->name('reset.password.page');
        Route::put('/change-password', [ProfileController::class, 'changePassword'])->name('change.password');

        //comment related routes
        Route::post('/comment/{task_id}', [CommentController::class, 'commentStore'])->name('comment.store');
    });
});

require __DIR__.'/auth.php';
