<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class Tasks extends Controller
{
    // Display create page
    public function create(){
        return view('add');
    }

    // Store a new task
    public function storetask(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'user_task' => 'required|string|max:255',
        ]);

        $task = $request->input('user_task');
        DB::table('tasks')->insert(['task' => $request->user_task]);

        return redirect('/add')->with('success','Task created successfully!');
    }

    // Delete a task
    public function delete($id)
    {
        // Find the task by id and delete it
        $task = Task::findOrFail($id);
        $task->delete();

        return redirect('/pending')->with('success', 'Task deleted successfully');
    }

    // Edit a task (if needed, you can implement this)
    public function edit($id)
{
    $task = Task::findOrFail($id);
    if ($task) {
        return view('edit', compact('task'));
    } else {
        return redirect('/pending')->with('error', 'Task not found');
    }
}

public function complete($taskId)
{
    $task = Task::findOrFail($taskId);
    $task->status = 'completed';
    $task->save();

    return redirect('/complete')->with('success', 'Task complete'); // Redirect back to the previous page
}
public function showPendingTasks() {
    $tasks = Task::where('status', 'pending')->get();

    return view('pending', compact('tasks'));
}

public function showCompletedTasks() {
    $completedTasks = Task::where('status', 'completed')->get();

    return view('complete', compact('completedTasks'));
}

    public function update(Request $request, $id)
    {
        $request->validate([
            'user_task' => 'required|string|max:255',
        ]);

        $task = Task::findOrFail($id);
        $task->task = $request->input('user_task');
        $task->save();

        return redirect('/pending')->with('success', 'Task updated successfully');
    }

}
