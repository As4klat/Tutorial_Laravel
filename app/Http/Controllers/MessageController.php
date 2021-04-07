<?php

namespace App\Http\Controllers;

use App\Mail\MessageReceived;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller
{
    public function store() {
        $message = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'asunto' => 'required',
            'contenido' => 'required'
        ]);



        // mandar mail

        Mail::to('alejandro.gamaza.martinez.vega@gmail.com')->queue(new MessageReceived($message));

        return 'Mensaje enviado';
    }
}
