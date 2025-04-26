<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Models\User;
use App\Models\Phone;
use Illuminate\Support\Facades\Hash;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/prueba', function () {
/*User::create([
    'name' =>'Pepe',
    'lastname' =>'Valencia',
    'email'=>'pepevalencia@gmail.com',
    'password' => Hash::make('1234')
]);*/
/*Phone::create([
    'number' =>'+217612712',
    'user_id' =>1
]);*/
$user = User::find(1); //nos muestra datos del usuario
return $user;
});

Route::get('/datos', [UserController::class, 'data']);
