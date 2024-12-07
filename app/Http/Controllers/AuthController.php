<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Client\Request as ClientRequest;

class AuthController extends Controller
{
    public static function login(Request $request)
    {
        // User::create([
        //     'email' => "admin@gmail.com",
        //     'password' => 'admin123'
        // ]);

        if (!Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect('/login')->with('message', 'login failed');
        }
        // $user = User::where('email', $request['email'])->first();
        // Auth::login( #);
        return redirect('/home');
    }
}
