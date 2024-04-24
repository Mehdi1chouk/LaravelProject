<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    
    public function create()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        // Validate the login form data
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Check if the email and password match the admin credentials
        if ($credentials['email'] === 'admin@admin.com' && $credentials['password'] === '999999999') {
            return redirect('/admin/products'); // Redirect to the admin dashboard
        }

        // Attempt to log the user in
        if (Auth::attempt($credentials)) {
            // Authentication successful
            return redirect('/dashboard'); // Redirect to the user dashboard
        } else {
            
            return back()->withErrors(['email' => 'Invalid credentials']); // Redirect back with error message
        }
    }

   
    public function destroy()
    {
        Auth::logout();
        return redirect('/login'); 
    }
    public function show(string $id)
    {
        
    }

   
    public function edit(string $id)
    {
        
    }

    
    public function update(Request $request, string $id)
    {
        
    }
}
