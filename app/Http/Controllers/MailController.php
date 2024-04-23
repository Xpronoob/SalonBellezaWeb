<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\EmailRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Mail\SendMail;
use App\Mail\SendMessageToEndUser;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class MailController extends Controller
{
    public function mailform()
    {
        return view('mail');
    }
    public function maildata(EmailRequest $request)
    {
        $name = $request->name;
        $email = $request->email;
        $sub = $request->sub;
        $mess = $request->mess;
        $mailData = [
            'url' => 'https://utopia-salon.com/',
        ];
        $send_mail = "admin@utopia-salon.com";
        Mail::to($send_mail)->send(new SendMail($name, $email, $sub, $mess));
        $senderMessage = "Gracias por tu mensaje, te atenderemos lo antes posible";
        Mail::to($email)->send(new
            SendMessageToEndUser($name, $senderMessage, $mailData));
        // Establecer la variable de sesión
        Session::flash('scrollToForm', true);

        return redirect('/')->with('mailMessage', '¡Correo electrónico enviado correctamente!');
    }
}
