<?php

namespace App\Http\Controllers\Employee;

use App\Models\Task;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class EmployeeDashboardController extends Controller
{
    //Employee Dashboard Page
    public function employeeDashboard()
    {
        return view('employee.employee-dashboard');
    }

    //Employee Task List Page
    public function employeeTasks()
    {
        $employee = Auth::user();

        $tasks = $employee->tasks()->get();

        return view('employee.task.index', compact('tasks'));
    }

    //Employee will be Show a Single Task
    public function showTask($id)
    {
        $employee = Auth::user();

        $task = $employee->tasks()->findOrFail($id);
        return view('employee.task.task-show', compact('task'));
    }

    //Employee will be Complete a Task
    public function completeTask($id)
    {
        $task = Task::findOrFail($id);

        //Task status change
        $task->status = 'completed';
        $task->save();

        $task->users()->syncWithoutDetaching([Auth::user()->id => ['completed_at' => now()]]);
        return redirect()->route('employee.tasks')->with('success', 'Task completed successfully.');
    }
}
