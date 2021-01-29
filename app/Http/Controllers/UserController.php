<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class  UserController extends Controller
{

    //create new user
    public function createUser(Request $request)
    {
        $user = User::create($request->all());
        return response()->json($user);
    }

    //update user details

    public function updateUser(Request $request, $id)
    {
        $user = User::find($id);
        $user->first_name = $request->input('first_name');
        $user->last_name =  $request->input('last_name');
        $user->email_address = $request->input('email_address');
        $user->save();
        return response()->json($user);
    }


    //view user
    public function viewUser($id)
    {
        $user =  User::find($id);
        return response()->json($user);
    }


    //delete user
    public function deleteUser($id)
    {
        $user =  User::find($id);
        $user->delete();

        return response()->json('Removed successfully');
    }

    //list users
    public function index()
    {
        $user = User::all();
        return response()->json($user);
    }
}
