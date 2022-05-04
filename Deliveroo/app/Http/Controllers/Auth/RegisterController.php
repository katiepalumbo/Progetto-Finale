<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Type;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
            'user_last_name' => ['required', 'string', 'max:30'],
            'user_cell_number' => ['required', 'numeric'],
            'user_tax_code' => ['required', 'numeric'],
            'user_street' => ['required', 'string', 'max:50'],
            'user_city' => ['required', 'string', 'max:30'],
            'user_zip_code' => ['required', 'numeric'],
            'restaurant_name' => ['required', 'string', 'max:30']
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
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'user_last_name' => $data['user_last_name'],
            'user_cell_number' => $data['user_cell_number'],
            'user_tax_code' => $data['user_tax_code'],
            'user_street' => $data['user_street'],
            'user_city' => $data['user_city'],
            'user_zip_code' => $data['user_zip_code'],
            'restaurant_name' => $data['restaurant_name'],
        ]);
    }

    public function index()
    {
        $types = Type::all();
        return view('views.auth.register', compact('types'));
    }

    public function show(Type $types)
    {
        return view('views.auth.register', compact('types'));
    }
}
