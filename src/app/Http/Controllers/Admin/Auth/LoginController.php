<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function index(){
        if (Auth::check()) {
            return redirect(route('image_view'));
        }
        return view('pages.admin.auth.login');
    }

    public function authenticate(Request $request){
        if (Auth::check()) {
            return redirect(route('image_view'));
        }
        $validator = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        $credentials['status'] = 1;

        if (Auth::attempt($credentials)) {
            return redirect()->intended(route('image_view'))->with('success_status', 'Logged in successfully.');
        }

        return redirect(route('login'))->with('error_status', 'Oops! You have entered invalid credentials');

        return view('pages.admin.auth.login');
    }
}
