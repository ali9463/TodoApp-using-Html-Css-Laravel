<?php

namespace App\Http\Controllers;

use App\Models\UserLogin;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;



class UserController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    // Handle login logic
    public function login(Request $request)
    {
        // Validate the login form data
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Find the user by email
        $user = UserLogin::where('email', $request->email)->first();

        // Check if user exists and password matches (plain text comparison)
        if ($user && $user->password === $request->password) {
            // Authentication passed, log the user in
            Auth::login($user);

            // Redirect to home page
            return redirect()->route('add')->with('success', 'Logged in successfully!');
        } else {
            // Authentication failed, redirect back with an error message
            return back()->withErrors(['email' => 'Invalid email or password'])->withInput();
        }
    }
    // Method to handle registration (store login info)
    public function signUp(Request $request)
    {
        // Validate the form data
        $validated = $request->validate([
            'email' => 'required|email|unique:logindata,email',
            'password' => 'required|min:4', // add a confirm password field in the form if needed
        ]);

        // Hash the password before saving
        // Store the password directly without hashing
        $password = $request->password; // No hashing

        // Store the data in the userlogin table
        UserLogin::create([
            'email' => $validated['email'],
            'password' => $password, // Store password as plain text
        ]);

        // Redirect or return a response
        return view('home')->with('success', 'Account created successfully!');
    }

    // Method to show the registration form
    public function showRegistrationForm()
    {
        return view('sign'); // your registration view
    }
}
