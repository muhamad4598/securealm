<?php

namespace App\Http\Controllers;
use App\Models\user;
use Illuminate\Http\Request;

class makeAdmin extends Controller
{
    public function makeAdmin($id)
{
    $user = User::find($id);
    $user->role = 'admin';
    $user->save();
    return back()->with('success', 'User is now an admin');
}
    public function makeUser($id)
{
    $user = User::find($id);
    $user->role = 'user';
    $user->save();
    return back()->with('success', 'User is now an user');
}
    public function makeApprove($id)
{
    $user = User::find($id);
    $user->isApproved = 'true';
    $user->save();
    return back()->with('success', 'User is now an active user');
}
    public function deleteUser($id)
{
    $user = User::find($id);
    $user->delete();
    return back()->with('success', 'deleted succesufully');
}

public function users()
{
    $users = User::all();
    return view('admin', ['users' => $users]);
}
public function usersNotApproved()
{
   $users = User::where('isApproved', '!=', 'true')->get();
    

    return view('adminApproval', ['users' => $users]);
}
}

