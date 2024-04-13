<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class DataController extends Controller
{
    public function index()
    {
        $users = User::all();
        // return view('users.index')->with('users', $users);
        return response()->json($users);
    }

    public function details($id)
    {
        $user = User::find($id);
        // return view('users.details')->with('user', $user);
        return response()->json($user);
    }
}
