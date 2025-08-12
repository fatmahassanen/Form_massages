<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class contentViewControlle extends Controller
{
    public function create()
    {
        return view('messages_form');
    }

    public function index()
    {
        $messages = Message::all();
        return view('messages_table', compact('messages'));
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'message' => 'required|string'
        ]);

        Message::create($request->all());
        return redirect('/messages')->with('success', 'Message added successfully!');
    }
}
