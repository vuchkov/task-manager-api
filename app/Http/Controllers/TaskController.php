<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth:api');
    }

    public function index()
    {
        //$tasks = Task::all();
        $tasks = Task::paginate(10);

        return response()->json([
            'status' => 'success',
            'tasks' => $tasks,
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'string|max:255',
            'status' => 'pending',
        ]);

        $task = Task::create([
            'title' => $request->title,
            'description' => $request->description,
            'status' => $request->status,
        ]);

        //return response()->json($task, 201);
        return response()->json([
            'status' => 'success',
            'message' => 'Task created successfully',
            'Task' => $task,
            201,
        ]);
    }

    public function show($id)
    {
        $task = Task::find($id);
        return response()->json([
            'status' => 'success',
            'Task' => $task,
        ]);
    }

    public function update(Request $request, $id)
    {
        $task = Task::find($id);
        $task->status = 'completed';
        $task->save();

        return response()->json([
            'status' => 'success',
            'message' => 'Task updated successfully',
            'Task' => $task,
        ]);
    }

    public function destroy($id)
    {
        $task = Task::find($id);
        $task->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'Task deleted successfully',
            'Task' => $task,
        ]);
    }
}
