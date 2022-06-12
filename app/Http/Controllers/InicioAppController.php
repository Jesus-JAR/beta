<?php

namespace App\Http\Controllers;

use App\Actions\Fortify\PasswordValidationRules;
use App\Models\User;
use App\Rules\ValidationName;
use App\Rules\ValidationPhone;
use Illuminate\Http\Request;



class InicioAppController extends Controller
{

    use PasswordValidationRules;


    public function create()
    {
        return view('users.inicio-app');
    }

    public function store(Request $request)
    {
        $this->validate(request(), [
            'first_name' => [new ValidationName, 'required', 'string'],
            'phone' => [new ValidationPhone, 'required', 'string'],

            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
        ]);
        $data = request()->all();
        $data['cod_emp'] = 1;
        $data['last_name'] = "";
        $data['phone'] = "";
        $user = User::create($data)->assignRole('Super Admin');

        auth()->login($user);
        return redirect()->to('dashboard');
    }
}
