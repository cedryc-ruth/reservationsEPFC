<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Input;

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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('guest');
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
            'firstname' => 'required|string|max:60',
            'lastname' => 'required|string|max:60',
            'login' => 'required|string|max:60',
            'langue' => 'required|string|max:2',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ],[
            'firstname.required' => 'Le champ prénom est obligatoire!',
            'firstname.string' => 'Le type du champ prénom est incorrect!',
            'firstname.max' => 'La longueur du champ prénom doit être de 60 caractères maximum!',
            
            'lastname.required' => 'Le champ nom est obligatoire!',
            'lastname.string' => 'Le type du champ nom est incorrect!',
            'lastname.max' => 'La longueur du champ nom doit être de 60 caractères maximum!',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'firstname' => $data['firstname'],
            'lastname' => $data['lastname'],
            'login' => $data['login'],
            'langue' => $data['langue'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'role_id' => 2,
        ]);
    }

    public function showProfilForm() {
        return view('auth.profil');
    }
    
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function updateProfil(Request $request)
    {
        Validator::make($request->all(), [
            'firstname' => 'required|string|max:60',
            'lastname' => 'required|string|max:60',
            'langue' => 'required|string|max:2',
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique('users')->ignore(Auth::id()),
                ],
            'password' => 'nullable|string|min:6|confirmed',
        ],[
            'firstname.required' => 'Le champ prénom est obligatoire!',
            'firstname.string' => 'Le type du champ prénom est incorrect!',
            'firstname.max' => 'La longueur du champ prénom doit être de 60 caractères maximum!',
            
            'lastname.required' => 'Le champ nom est obligatoire!',
            'lastname.string' => 'Le type du champ nom est incorrect!',
            'lastname.max' => 'La longueur du champ nom doit être de 60 caractères maximum!',
        ])->validate();
        
        $user = User::find(Auth::id());

        $user['firstname'] = $request->input('firstname');
        $user['lastname'] = $request->input('lastname');
        $user['langue'] = $request->input('langue');
        $user['email'] = $request->input('email');

        if(!empty($request->input('password'))) {
            $user['password'] = bcrypt($request->input('password'));
        }
        
        if(!$user->save()) {
            Session::push('errors', 'Erreur database!');
        }
        
        return redirect()->route('profil');
    }
}
