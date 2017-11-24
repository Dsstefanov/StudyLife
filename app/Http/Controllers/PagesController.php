<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;


class PagesController extends Controller
{
    public function __construct(){
        $this->middleware(['auth', 'admin']);
    }

    public function users(){
        $users = User::all();
        return view('users',compact('users'));
    }
    /*users registration form*/
    public function register(){
        return view('register');
    }

    /*deleting user*/
    public function destroy($id){
        User::destroy($id);
        return redirect('users');
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $validationCheck = false;

        if ($request->password) {
            if ($user->email === $request->email && $user->name === $request->name) {
                $this->validate($request, array(
                    'password' => 'required|min:6',
                ));
                $validationCheck = true;
            } elseif ($user->email === $request->email) {
                $this->validate($request, array(
                    'name' => 'required|max:255',
                    'password' => 'required|min:6',
                ));
                $validationCheck = true;
            } elseif ($user->name === $request->name) {
                $this->validate($request, array(
                    'email' => 'required|email|max:255|unique:users',
                    'password' => 'required|min:6',
                ));
                $validationCheck = true;
            }else{
                $this->validate($request, array(
                    'name' => 'required|max:255',
                    'email' => 'required|email|max:255|unique:users',
                    'password' => 'required|min:6',
                ));
                $validationCheck = true;
            }
        } else {
            if ($user->email === $request->email && $user->name === $request->name) {
                $this->validate($request, array(
                    'password' => 'required|min:6',
                ));
                $validationCheck = true;
            }elseif ($user->email === $request->email) {
                $this->validate($request, array(
                    'name' => 'required|max:255',
                ));
                $validationCheck = true;
            } elseif ($user->name === $request->name) {
                $this->validate($request, array(
                    'email' => 'required|email|max:255|unique:users',
                ));
                $validationCheck = true;
            } else{
                $this->validate($request, array(
                    'name' => 'required|max:255',
                    'email' => 'required|email|max:255|unique:users',
                ));
                $validationCheck = true;
            }
        }

        if ($user && $validationCheck) {
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = bcrypt($request['password']);
            $user->save();
        } else {
            return redirect('/');
        }
        return redirect('/users');
    }
}
