<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

use App\Admin;
use App\Administrateur;
use App\Etudiant;
use App\Enseignant;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
        $this->middleware('guest:admin');
        $this->middleware('guest:etudiant');
        $this->middleware('guest:enseignant');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(Request $request)
    {
        return User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'prenom' => $request['prenom'],
            'genre' => $request['genre'],
            'dateDeNaissance' => $request['dateDeNaissance'],
            'pays' => $request['pays'],
            'password' => Hash::make($request['password']),
        ]);
        return redirect()->intended(route('home'));
    }

    public function showEtudiantRegisterForm()
    {
        return view('auth.etudiant-register');
    }

    protected function createEtudiant(Request $request)
    {
        $this->validator($request->all())->validate();
        $etudiant = Etudiant::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'prenom' => $request['prenom'],
            'genre' => $request['genre'],
            'date_de_naissance' => $request['date_de_naissance'],
            'pays' => $request['pays'],
            'password' => Hash::make($request['password']),
        ]);
        return redirect()->intended(route('etudiant.dashboard'));
    }
}
