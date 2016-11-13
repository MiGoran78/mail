<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

use Illuminate\Support\Facades\Mail;

Route::get('/', function () {

//    return view('welcome');
    $data = [
        'title' => 'Hi',
        'content' => 'Laravel course'
    ];


    Mail::send('emails.test', $data, function ($message){
        $message->to('mi.goran@hotmail.com', 'Goran')->subject('Zdravo');
    });


});

