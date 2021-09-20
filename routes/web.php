<?php

use Illuminate\Http\Request;
use App\Mail\ContactMessageCreated;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ContactRequest;
use Illuminate\Support\Facades\Route;

use function PHPUnit\Framework\returnSelf;

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
    return view('welcom2');
});

Route::name('home')->get('/home', function () {
    return view('auth.home');
})->middleware('auth');

Route::name('dossier')->get('dossier', function(){
    return view('layouts.dossier');
})->middleware('auth');

Route::name('avocat')->get('avocat', function(){
    return view('layouts.avocats');
})->middleware('auth');

Route::name('client')->get('client', function(){
    return view('layouts.clients');
})->middleware('auth');

Route::name('consultation')->get('consultation', function(){
    return view('consultation');
});

Route::name('consultation_path')->post('consultation', function (ContactRequest $_request){
    $mailable =new ContactMessageCreated($_request->name,$_request->email,$_request->message);
    Mail::to('danielkatoro@gmail.com')->send($mailable);
    flashy('You have been logged out.');
});

Route::name('test-email')->get('test-email', function(){
    return new ContactMessageCreated('Daniel Katoro','danielkatoro@gmail.com','Merci beacoup');
});
// Route::post('consultation', [
//     'as'=>'consultation_path',
//     'users'=>'PagesController.store'
// ]);

