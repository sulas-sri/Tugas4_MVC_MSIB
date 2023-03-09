<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $payload['user'] = 'John Doe';        
        $payload['item'] = 'Pensil';

        // ORM
        $payload['modelUser'] = User::all();

        // Query
        // $payload['modelUser'] = DB::table('users')->get();

        // 1 item
        return view('index', $payload);

        // 2 items
        // return view('index', $items, $payload);
    }
}