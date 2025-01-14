<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/**
 * CREATE
 */
Route::post('/register', function (Request $request) {
    User::create([
        'name'      => $request->name,
        'email'     => $request->email,
        'password'  => bcrypt($request->password)
    ]);

    return 'data tersimpan';
});

/**
 * READ
 */
Route::get('/users', function () {
    $data = User::all();

    return response()->json($data);
});

/**
 * UPDATE
 */
//

/**
 * DELETE
 */
//
