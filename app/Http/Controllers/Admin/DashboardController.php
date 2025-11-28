<?php

namespace App\Http\Controllers\Admin;

use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function dashboardPage()
    {
        $totalEmployees = User::where('role', 'employee')->count();
        $totalTasks = Task::count();
        $totalCompletedTasks = Task::where('status', 'completed')->count();

        return view('admin.dashboard', compact('totalEmployees','totalTasks','totalCompletedTasks'));
    }

}
