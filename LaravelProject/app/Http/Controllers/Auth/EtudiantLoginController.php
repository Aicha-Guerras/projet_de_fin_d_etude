<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EtudiantLoginController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('guest:etudiant',['except' => ['logout']]);
    }

    public function showLoginForm()
    {
        return view('auth.etudiant-login');
    }

    public function login(Request $request)
    {
        // Validate the form data
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        // Attempt to log the user in
        if (Auth::guard('etudiant')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {

            return redirect()->intended(route('etudiant.dashboard'));
        }

        // if successful then redirect back to the login with the form data
        return redirect()->back()->withInput($request->only('email', 'remember'));   
    }

    public function logout()
    {
        Auth::guard('etudiant')->logout();        
        return redirect('/');
    }
}
