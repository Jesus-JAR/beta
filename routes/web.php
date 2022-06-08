<?php


use App\Http\Controllers\InicioAppController;
use App\Http\Livewire\CheckIn;
use App\Models\User;
use Illuminate\Support\Facades\Route;

$users = User::all()->isEmpty();
if ($users){
    Route::get('/', [InicioAppController::class, 'create']);
    Route::post('/', [InicioAppController::class, 'store']);
}else{
    Route::get('/', function () {
        return view('welcome');
    })->name('welcome');
}


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'

])->group(callback: function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    /*
     * users
     */
    Route::get('/users', function () {
        return view('users.users');
    })->name('users');

    /*
     *  Check in
     */
    Route::get('/check-in', function () {
        return view('records.check-in');
    })->name('check');

        /*
     *  Bussines
*/
    Route::get('/business', function () {
        return view('business.business');
    })->name('business');

    /*
    *  Pdf
     */
    Route::get('download-pdf', [CheckIn::class,'downloadPDF'])->name('download-pdf');


});
