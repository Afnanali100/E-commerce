<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class AdminUserController extends Controller
{

    public function index()
    {
        $users = User::get();
        return view('users.index', ['users' => $users]);
    }

    public function show($id)
    {
        $user = User::find($id);
        return view('users.show', ['user' => $user]);
    }

    public function destroy($id)
    {
        User::where('user_id', $id)->delete();
        return redirect()->route('users.index');
    }

    public function edit($id)
    {
         $user = User::find($id);
        return view('users.edit', ['user' => $user]);
    }

    public function update(Request $request, $id)
    {
      
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$id.',user_id',
            'password' => 'required|min:6',
            'user_room' => 'required|numeric',
             'user_pic' => 'image|mimes:jpeg,png,jpg|max:2048',
             'admin_id' => 'required|numeric',
        ]);

        $user = User::findOrFail($id);


        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->user_room = $request->input('user_room');
        $user->admin_id=$request->input('admin_id');

        if ($request->hasFile('user_pic')) {
        $imagePath = $request->file('user_pic')->store('public');
        $user->user_pic = basename($imagePath);
    }


        $user->save();


        return redirect()->route('users.index');
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'user_room' => 'required|numeric',
            'admin_id'=>'required|numeric'

        ],[
        'user_name.required' => 'The user name is required.',
        'user_email.required' => 'The user email is required.'
]

    );

        if ($request->hasFile('user_pic')) {
        $imagePath = $request->file('user_pic')->store('user_images', 'public');
        $validatedData['user_pic'] = $imagePath;
    }

   User::create($validatedData);
    return redirect()->route('users.index');
    }
}
