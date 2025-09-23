<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class StudentLoginController extends Controller
{
   public function index(Request $request){
        return response()
            ->view('auth.student-login')
            ->header('Cache-Control', 'no-store, no-cache, must-revalidate, max-age=0')
            ->header('Pragma', 'no-cache');
    }
    
    public function login(Request $request){
        $credentials = $request->only('email', 'password');
        if(Auth::guard('student')->attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended(route('student.home'));
        }
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function logout(){
        Auth::guard('student')->logout();
        return redirect('/login/student');
    }
    
}
