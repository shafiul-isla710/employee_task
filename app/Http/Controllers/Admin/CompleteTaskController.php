<?php

namespace App\Http\Controllers\Admin;

use App\Models\Task;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CompleteTaskController extends Controller
{
    /**
     * Complete Task Table
     */
    public function completeTaskPage()
    {
        $completedTasks = Task::where('status', 'completed')->orWhere('status', 'approved')->get();
        return view('admin.task.complete-task', compact('completedTasks'));
    }

    /**
     * Approve Task Table
     */
    public function approveTaskPage()
    {
        $approvedTasks = Task::where('status', 'approved')->get();
        return view('admin.task.approved-task', compact('approvedTasks'));
    }

     /**
     * Approve Task From Admin Panel
     */
    public function approveTask($id)
    {
        $task = Task::findOrFail($id);
        $task->status = 'approved';
        $task->save();

        return redirect()->route('admin.task.complete')->with('success', 'Task approved successfully.');
    }
}
