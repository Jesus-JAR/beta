<?php

namespace App\Http\Controllers;

use App\Actions\Fortify\PasswordValidationRules;
use App\Rules\ValidationName;
use App\Rules\ValidationPhone;

use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Http\Request;
use Livewire\WithPagination;

class UserController extends Controller
{
    use WithPagination;
    use PasswordValidationRules;

    public $first_name, $last_name, $email, $phone, $cod_emp, $password, $work_hours;


    // Variable
    public $search;
    public $perPage;


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // mostramos los datos en una tabla
        return view('users.index', [
            'users' => User::where('first_name', 'like', "%$this->search%")
                ->orWhere('last_name', 'like', "%$this->search%")
                ->paginate($this->perPage),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('users.create');
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User();
        $user->first_name = $this->first_name;

        $user = User::create([
            'first_name' => ucfirst(trans($request['first_name'])),
            'last_name' => ucfirst(trans($request['last_name'])),
            'email' => $request['email'],
            'password' => $request['password'],
            'cod_emp' => $request['business'],
            'phone' => $request['phone'],
        ])->assignRole('Developer');
        $user->sendEmailVerificationNotification();

        return redirect()->route('users.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $user = User::find($id);
        //dd($user);
        $user->delete();
        return redirect()->route('users.index');
    }
}
