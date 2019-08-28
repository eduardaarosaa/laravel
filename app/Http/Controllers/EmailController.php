<?php

namespace App\Http\Controllers;

use Mail;
use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function send(Request $request){
        
        $title = $request->input('title');
        $content = $request->input('content');

        \Mail::send('emails', ['title' => $title, 'content' => $content], function ($message)
        {

            $message->from('eduardacirina@gmail.com', 'Duda - Aprendendo');

            $message->to('gustavo@bloco1.com.br');

        });


        return response()->json(['message' => 'Request completed']);
    
    }
}
