<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Show the login form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showLoginForm()
    {
        return view('member.login');
    }



    public function login(Request $request)
    {
        $credentials = $request->only('staffnumber', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed
            return redirect()->intended('/dashboard');
        }

        // Authentication failed
        return redirect()->back()->withErrors([
            'credentials' => 'Invalid credentials provided.',
        ]);
    }

}
//     /**
//      * Handle a login request.
//      *
//      * @param  \Illuminate\Http\Request  $request
//      * @return \Illuminate\Http\Response
//      */
//     public function login(Request $request)
//     {
//         $credentials = $request->only('staffnumber', 'password');

//         if (Auth::attempt($credentials)) {
//             // Authentication passed
//             return redirect()->intended('/dashboard');
//         }

//         // Authentication failed
//         return redirect()->back()->withErrors([
//             'credentials' => 'Invalid credentials provided.',
//         ]);
//     }

//     /**
//      * Log the user out of the application.
//      *
//      * @param  \Illuminate\Http\Request  $request
//      * @return \Illuminate\Http\Response
//      */
//     public function logout(Request $request)
//     {
//         Auth::logout();

//         $request->session()->invalidate();

//         return redirect('/');
//     }
// }
