<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\File;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('filetypebug');
});

Route::post('/', function (Request $request) {

    $validator = Validator::make($request->all(), [
        'pfxfile' => ['required', 'file', File::types(['p12','pfx'])],
    ]);

    $validator->
    $validData = $validator->validate();

    return 'ok';
})->name('filetypebug');
