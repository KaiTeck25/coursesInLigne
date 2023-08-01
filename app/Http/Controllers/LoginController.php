<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Handle the login form submission.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication successful
            $user = Auth::user();
            $status = $user->status;

            if ($status == 0) {
                // Admin
                return redirect('/dashboard');
            } else {
                // Regular user
                return redirect('/');
            }
        } else {
            // Authentication failed
            return redirect()->back()->withInput()->withErrors(['email' => 'Invalid credentials']);
        }
    }

    public function index()
    {
        // Check if the user is authenticated
        if (Auth::check()) {
            $userName = Auth::user()->name;

            // Pass the user's name to the index view
            return view('client.index', compact('userName'));
        }

        // If the user is not authenticated, simply load the index view without the user's name
        return view('client.index');
    }
}

