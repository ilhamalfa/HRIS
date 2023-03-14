<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
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
            'username' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'negara' => ['required', 'string', 'max:255'],
            'provinsi' => ['required', 'string', 'max:255'],
            'kota_asal' => ['required', 'string', 'max:255'],
            'alamat' => ['required', 'string', 'max:255'],
            'nik' => ['required', 'numeric', 'max:9999999999999999'],
            'status' => ['required', 'string', 'in_array:lajang,menikah'],
            'anak' => ['required','integer'],
            'no_telepon' => ['required','string','max:13'],
            'role' => ['required', 'string', 'in_array:superadmin,admin,employee'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'id_jabatan' => ['required', 'exists:jabatans,id'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'username' => $data['username'],
            'password' => Hash::make($data['password']),
            'negara' => $data['negara'],
            'provinsi' => $data['provinsi'],
            'kota_asal' => $data['kota_asal'],
            'alamat' => $data['alamat'],
            'nik' => $data['nik'],
            'status' => $data['status'],
            'anak' => $data['anak'],
            'no_telepon' => $data['no_telepon'],
            'role' => $data['role'],
            'email' => $data['email'],
            'id_jabatan' => $data['id_jabatan'],
        ]);
    }
}
