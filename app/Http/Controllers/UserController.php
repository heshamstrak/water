<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function login() {
        return view('frontend.auth.login');
    }

    public function loginAuth(Request $request) {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials))
        {
            $previousUrl = Session::get('previous_url');
            $request->session()->regenerate();
            if($previousUrl != null) {
                return redirect()->to($previousUrl)->withSuccess('You have successfully logged in!');
            } else {
                return redirect()->back()->withSuccess('You have successfully logged in!');
            }
        }

        return back()->withErrors(['email' => 'Your provided credentials do not match in our records.', ])->onlyInput('email');
    }
    
    public function register() {
        return view('frontend.auth.register');
    }

    public function registerAuth(Request $request)
    {
        $request->validate([
            'first_name'    => 'required|string|max:250',
            'last_name'     => 'required|string|max:250',
            'email'         => 'required|email|max:250|unique:users',
            'password'      => 'required|min:8',
            'address_one'   => 'required',
            'address_two'   => 'nullable',
            'city'          => 'required',
            'phone'         => 'required',
        ]);

        User::create([
            'name' => $request->first_name . ' ' . $request->last_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'address_one' => $request->address_one,
            'address_two' => $request->address_two != null ? $request->address_two : null,
            'city' => $request->city,
            'phone' => $request->phone,
            'type' => 'user',
        ]);

        $credentials = $request->only('email', 'password');
        Auth::attempt($credentials);
        $request->session()->regenerate();
        return redirect()->route('login.user');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login')
            ->withSuccess('You have logged out successfully!');;
    } 
}
