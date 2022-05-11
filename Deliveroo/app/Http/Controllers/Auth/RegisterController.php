<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Providers\RouteServiceProvider;
use App\Type;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use phpDocumentor\Reflection\Types\Nullable;

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
            'user_cell_number' => ['required', 'numeric', 'regex:/[0-9]{10}/'],
            'user_tax_code' => ['required', 'numeric', 'regex:/[0-9]{11}/'],
            'user_street' => ['required', 'string', 'max:50'],
            'user_city' => ['required', 'string', 'max:30'],
            'user_zip_code' => ['required', 'numeric', 'regex:/[0-9]{5}/'],
            'restaurant_name' => ['required', 'string', 'max:30'],
            'description' => ['required', 'string', 'min:30'],
            'types' => ['required'],
            //'user_cover' => ['image']
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

        User::create([
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
            'description' => $data['description'],
            'slug'  => Str::slug($data['restaurant_name'], '-'),
            //'types' => $data['types'],
            //'user_cover'=>Storage::put('uploads',$data['user_cover']),
        ]);

 


        $newUser = User::orderBy('id', 'desc')->first();
        
        $newUser->fill($data);
        $newUser->type()->attach($data['types']);
        return $newUser;
    }

    public function index(Request $request, User $user)
    {
        $types = Type::all();

        // $data = $request->all();

        // $slug = Str::slug($data['restaurant_name']);

        // if ($user->slug != $slug) {
        //     $counter = 1;

        //     while(User::where('slug', $slug)->first()){
        //         $slug = Str::slug($data['restaurant_name']) . '-' . $counter;
        //         $counter++;
        //     }
        //     $data['slug'] = $slug;

        // }

        // $data['slug'] = $slug;


        return view('auth.register', compact('types'));
    }

    

    public function show(Type $types)
    {

        return view('auth.register', compact('type'));
    }

    public function showRegistrationForm()
    {
        $types = Type::all();
        return view('auth.register', compact('types'));
    }
}
