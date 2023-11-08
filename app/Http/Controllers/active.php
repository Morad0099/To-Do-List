<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class active extends Controller
{
    public function index(){
        
    }

    public function users()
    {
        return view('users');
    }

    public function users_data()
    {
        $todos = [
            't1' => ['text' => 'Board the plane'],
            't2' => ['text' => 'Sleep'],
            // Add other todos here
        ];
    
        return response()->json(['todos' => $todos]);
    }
}
