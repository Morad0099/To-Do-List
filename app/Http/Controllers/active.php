<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Tasks;
use App\Models\task_user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class active extends Controller
{
    public function index(){
        
    }

    public function users()
    {
        return view('users');
    }

    public function admin()
    {
        return view('admin-panel');
    }


    public function users_data()
    {
        try {
            // dd(auth()->user());
            // $tasks = task_user::with('Tasks')->where('user_id', auth()->user()->id)->get();
            $tasks = User::find(auth()->user()->id)->tasks;
            // $data = $tasks->tasks;
            // dd($tasks->description);
            $todos = [];
        
            foreach ($tasks as $task) {
                $todos['t' . $task->id] = ['text' => $task->description ?? ''];
                // You can add more fields like description, timestamp, etc., based on your requirements
            }
        
            return response()->json(['todos' => $todos]);
        } catch (\Throwable $th) {
            // throw $th;
        }
    }



    public function store(Request $request)
{
    // Validate the incoming request if needed
    $request->validate([
        'text' => 'required|string',
        // Add other validation rules here
    ]);

    // Create a new task
    $task = new Tasks();
    $task->title = $request->input('text');
    $task->description = $request->input('text');
    // $task->user_id = auth()->user()->id;
    // Set other task properties if needed
    if ($task->save()) 
    {
        // $task->user_id = auth()->user()->id;
    }
    $user = auth()->user();

    // Attach the task to the authenticated user (assuming you have user authentication)
     if ($user) {
        $user->tasks()->save($task);
        return response()->json(['message' => 'Todo stored successfully'], 200);
    } else {
        return response()->json(['message' => 'User not authenticated'], 401);
    }
}
}
