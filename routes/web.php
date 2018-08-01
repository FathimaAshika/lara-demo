<?php

use Illuminate\Http\Request;
use App\User;


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

    return view('welcome');
});


Auth::routes();

Route::post('verify/email', function(Request $request){
 	  $email = $request->email;

        if($email){

          User::whereEmail($email)->update(['is_verified'=>1]);
          return redirect()->back()->with('status', 'Email Successfully verified !');

        }

 })->name('email.verify');


Route::get('/home', 'HomeController@index')->name('home');
