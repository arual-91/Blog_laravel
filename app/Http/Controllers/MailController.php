<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\AutoBlogMailable;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendEmail(Request $request){

        $validated = $request->validate([
            'email' => 'required',
            'cuerpo' => 'required',
        ]);

        $body = $request->input("cuerpo");
        $email = $request->input("email");

        $correo = new AutoBlogMailable($body,  $email);
        Mail::to("destinatario@correo.com")->send($correo);  
    
        return 'Mensaje enviado <a href="/libros" class="btn btn-dark mt-5"> << Volver </a>';

    }}
