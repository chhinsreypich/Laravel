<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function list()
    {
        $users = User::get();
        ///// User here from model
        return view('users.list', ['users' => $users]);
    }
    //
    public function create()
    {
        /// create after . is name of file blade
        /// then go to create "create"file blade
        return view('users.create');
    }
    public function store(Request $request)
    {
        /////////// Controller : CRUD

        // dd($request->all());/// this show us the field we input in create page then develop it
        // /// this show all what we input (including password)

        $user = new User; /// from Model : tek tong muy db
        $user->name = $request->username;
        $user->email = $request->email;
        // user->email : this email is from table in database
        /// $request->email: email here we took it from name of input tag in html
        $user->password = bcrypt($request->input('password'));
        $user->save();
        //// if out db is not auto increament 
        //// then we use $user->create() instead of $user->save()****(for create function)
        return redirect('list')->with('success', "success");
    }

    public function edit($id)
    {
        // $user = User::find($id); /// same as findorFail
        $user = User::findorFail($id);
        return view('users.edit', ['user' => $user]);
    }

    public function update(Request $request, $id)
    {
        $user = User::findorFail($id);
        $user->name = $request->username;
        $user->email = $request->email;
        $user->password = bcrypt($request->input('password'));
        $user->save();
        //// if out db is not auto increament 
        //// then we use $user->update() instead of $user->save()****(for update function)
        return redirect('list')->with('success', "success");
    }
    
    public function destroy($id){
        $user = User::findorFail($id);
        $user->delete();
        return redirect('list')->with('success', "success");

    }
}
