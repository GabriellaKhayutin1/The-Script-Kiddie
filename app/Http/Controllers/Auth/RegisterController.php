<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    use RegistersUsers;

    protected $redirectTo = '/home';

    public function __construct()
    {
        // Remove middleware line here
    }
 protected function validator(array $data)
 {
     return Validator::make($data, [
         'name' => ['required', 'string', 'max:255'],
         'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
         'password' => [
             'required',
             'string',
             'min:12',
             'regex:/[A-Z]/', // Must contain an uppercase letter
             'regex:/[a-z]/', // Must contain a lowercase letter
             'regex:/[0-9]/', // Must contain a digit
             'regex:/[@$!%*?&]/', // Must contain a special character
             'confirmed'
         ],
     ]);
 }


    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }
}
