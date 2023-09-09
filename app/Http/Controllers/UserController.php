<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
                Password::min(8)->symbols()->numbers()
            ]
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator->errors());
        }

        return $request;
    }
}
