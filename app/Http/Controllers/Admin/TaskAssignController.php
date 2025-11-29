<?php

namespace App\Http\Controllers\Admin;

use App\Models\Task;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;

class TaskAssignController extends Controller
{
    // Task Assign Page
    public function taskAssignPage($id)
    {
        $task = Task::find($id);

        $employees = User::employee()->where('status', 1)->get();
        return view('admin.task.task-assign', compact('task','employees'));
    }

    // Task Assign Functionality to be implemented
    public function assignTask(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
        ]);

        $task = Task::findOrFail($request->id);

        $task->status = 'assigned';
        $task->save();

        $task->users()->syncWithoutDetaching([$request->user_id => ['assigned_at' => now()]]);
        return redirect()->route('admin.task.index')->with('success', 'Task assigned successfully.');
    }

    // Unassign Task
    public function unassignTask($task_id)
    {
        $task = Task::findOrFail($task_id);

        $task->status = 'created';
        $task->save();
        $user = $task->users()->first();
        // dd($user->id);
        $task->users()->detach($user->id);
        return redirect()->back()->with('success', 'Task unassigned successfully.');
    }
}
