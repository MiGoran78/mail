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


require '../vendor/autoload.php';
require '../vendor/PHPMailer/PHPMailer/PHPMailerAutoload.php';
require '../vendor/PHPMailer/PHPMailer/class.phpmailer.php';

use Illuminate\Support\Facades\Mail;
use Mailgun\Mailgun;


Route::get('/', function () {

//    return view('welcome');


//    $data = [
//        'title' => 'Zdravo',
//        'content' => 'Testing'
//    ];
//
//    Mail::send('emails.test', $data, function ($message){
//        $message->to('mi.goran@hotmail.com', 'Goran')->subject('Zdravo');
//    });



    # Instantiate the client.
    $mgClient = new Mailgun('key-043df5e21334fb2cce59f7d871d5ea7b');
    $domain = "sandbox806111752e784d739f0b6888949d6632.mailgun.org";

    # Make the call to the client.
    $result = $mgClient->sendMessage($domain, array(
        'from'    => 'postmaster@sandbox806111752e784d739f0b6888949d6632.mailgun.org',
        'to'      => 'mi.goran@hotmail.com',
        'subject' => 'Hello',
        'text'    => 'Testing some Mailgun awesomness!'
    ));



//    $mgClient = new Mailgun('bb253eec3b7152842a14b579bcf9c6b2');
//    $domain = "sandbox806111752e784d739f0b6888949d6632.mailgun.org";
//
//    # Issue the call to the client.
//    $result = $mgClient->post("lists", array(
//        'address'     => 'mi.goran@hotmail.com',
//        'description' => 'Mailgun Dev List'
//    ));




//    $mail = new PHPMailer;
//
//    $mail->isSMTP();                                      // Set mailer to use SMTP
//    $mail->Host = 'smtp.mailgun.org';                     // Specify main and backup SMTP servers
//    $mail->SMTPAuth = true;                               // Enable SMTP authentication
//    $mail->Username = 'sandbox806111752e784d739f0b6888949d6632.mailgun.org';   // SMTP username
//    $mail->Password = 'bb253eec3b7152842a14b579bcf9c6b2';                           // SMTP password
//    $mail->SMTPSecure = 'tls';                            // Enable encryption, only 'tls' is accepted
//    $mail->Port = 465;
//    $mail->Timeout = 10;
//
//    $mail->From = 'postmaster@sandbox806111752e784d739f0b6888949d6632.mailgun.org';
//    $mail->FromName = 'phpdev';
//    $mail->addAddress('mi.goran000@gmail.com');                 // Add a recipient
//
//    $mail->WordWrap = 50;
//
//    $mail->Subject = 'Hello';
//    $mail->Body    = 'Testing some Mailgun awesomness';
//
//    if(!$mail->send()) {
//        echo 'Message could not be sent.';
//        echo 'Mailer Error: ' . $mail->ErrorInfo;
//    } else {
//        echo 'Message has been sent';
//    }

});

