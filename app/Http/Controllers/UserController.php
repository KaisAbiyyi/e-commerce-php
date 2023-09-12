<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;

class UserController extends Controller
{
    public function registerGet()
    {
        return view('pages.auth.register');
    }

    public function registerPost(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|unique:users,email,except,id|email',
            'password' => [
                'required',
                Password::min(8)->symbols()->numbers()->mixedCase()
            ]
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator->errors());
        }

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->role_id = 'customer';
        $user->save();

        if (!Auth::attempt([
            'email' => $user->email,
            'password' => $request->password
        ])) {
            return back()->withErrors('Something went wrong');
        }

        return redirect()->route('index');
    }

    public function loginGet()
    {
        return view('pages.auth.login');
    }

    public function loginPost(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator->errors());
        }

        if (!Auth::attempt([
            'email' => $request->email,
            'password' => $request->password
        ])) {
            return back()->withErrors(['credentials' => 'Email or password incorect!']);
        }

        return redirect()->route('index');
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('login.get');
    }
}
