<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserProfileController extends Controller
{
    public function show()
    {
        $user = auth()->user();
        return view('profile.show', compact('user'));
    }

    public function edit()
    {
        $user = Auth::user();
        return view('profile.edit', compact('user'));
    }

    public function update(Request $request)
    {
        $user = Auth::user();

    $request->validate([
        'name' => 'required',
        'email' => 'required|email|unique:users,email,' . auth()->user()->id . ',user_id',
        'password' => 'required|min:6',
        'user_room' => 'required|numeric',
        'user_pic' => 'image|mimes:jpeg,png,jpg|max:2048',
        'admin_id' => 'required|numeric',
    ]);

   
    $user->name = $request->input('name');
    $user->email = $request->input('email');
    $user->password = bcrypt($request->input('password'));
    $user->user_room = $request->input('user_room');
    $user->admin_id = $request->input('admin_id');

    if ($request->hasFile('user_pic')) {
        $imagePath = $request->file('user_pic')->store('public');
        $user->user_pic = basename($imagePath);
    }

    $user->save();

    return redirect()->route('profile.show');
    }
}


