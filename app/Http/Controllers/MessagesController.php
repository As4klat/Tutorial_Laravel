<?php

namespace App\Http\Controllers;

use App\Mail\MessageReceived;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MessagesController extends Controller
{
    public function store(Request $request) {
        $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'asunto' => 'required',
        'contenido' => 'required'
        ]);


        // mandar mail

        Mail::to('alejandro.gamaza.martinez.vega@gmail.com')->send(new MessageReceived);

        return 'Mensaje enviado';
    }
}
