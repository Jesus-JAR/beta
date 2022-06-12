<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Actions\Fortify\PasswordValidationRules;
use App\Rules\ValidationName;
use App\Rules\ValidationPhone;

class Form extends Component
{
    use PasswordValidationRules;

    // variables a validar
    public $first_name, $last_name, $email, $phone, $cod_emp, $password, $work_hours, $password2;


    public function rules()
    {
        return [
            'first_name' => ['required', 'string', 'min:3', 'max:15'],
            'last_name' => ['required', 'string', 'min:3', 'max:15'],
            'email' => 'required|string|email|max:255|unique:users,email',
            'phone' => [new ValidationPhone, 'required',  'min:9', 'max:12'],
            'password' => $this->passwordRules(),
            'work_hours' => 'numeric|min:6',
            'cod_emp' => 'required'

        ];
    }

    protected $messages = [
        'first_name.required' => 'The first name cannot be empty.',
        'first_name.min' => 'Must contain at least 3 characters.',
        'first_name.max' => 'Must contain a maximum of 16 characters.',
        'last_name.required' => 'The last name cannot be empty.',
        'last_name.min' => 'Must contain at least 3 characters.',
        'last_name.max' => 'Must contain a maximum of 16 characters.',
        'cod_emp.required' => 'Select Company',
        'password.confirmed' => 'Password does not match'

    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function saveContact()
    {
        $validatedData = $this->validate();

    }
    public function render()
    {
        return view('livewire.form');
    }
}
