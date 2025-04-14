<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller; // Add this import
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use App\Models\User_role;

class CustomAuthController extends Controller
{
    public function redirectTo()
    {
        $role = User_role::where('userid', Auth::user()->type)->first();
        dd($role);
            if ($role->roleid == 1) {
                return '/admin';
            } elseif ($role->roleid == 2) {
                return '/user';
            }

        return '/login'; // Handle if role is not found
    }

    public function index()
    {
        return view('auth.login');
    }

    public function customLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $role = User_role::where('userid', Auth::user()->type)->first();
                if (Auth::user() && $role->roleid == 1) {
                    return redirect('/admin');
                }elseif (Auth::user() && $role->roleid == 2) {
                    return redirect()->intended('/user');
                }
        }

        return redirect("/login")->with('error', 'Invalid credentials');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function customRegistration(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'username' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'type' => 'required'
        ]);
        $data['password'] = Hash::make($request->password);
        $data = $request->all();
        $user = $this->create($data);

        User_role::create([
            'userid' => $user->type,
            'roleid' => $request->type,
            'role_name' =>$user->name,
        ]);

        return redirect("/login")->with('success', 'You have signed in');
    }

    public function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'username' => $data['username'],
            'password' => Hash::make($data['password']),
            'type' => $data['type']
        ]);
    }

    public function signOut()
    {
        Session::flush();
        Auth::logout();

        return redirect('/login');
    }
}
