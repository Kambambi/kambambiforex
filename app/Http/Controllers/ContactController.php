<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class ContactController extends Controller
{
    /**
     * Enviar mensagem do site
     */
    public function send(Request $request)
    {
        $request->validate([
            'name'     => 'required|string|max:255',
            'whatsapp' => 'required|string|max:30',
            'message'  => 'required|string',
        ]);

        Message::create([
            'name'     => $request->name,
            'whatsapp' => $request->whatsapp,
            'message'  => $request->message,
        ]);

        return back()->with('success', 'Mensagem enviada com sucesso!');
    }

    /**
     * Listar mensagens no painel admin
     */
    public function admin()
    {
        $messages = Message::latest()->get();
        return view('admin.messages', compact('messages'));
    }
}
