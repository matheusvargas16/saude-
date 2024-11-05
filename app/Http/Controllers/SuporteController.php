<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket; // Supondo que você tenha um modelo Ticket

class SuporteController extends Controller
{
    public function index()
    {
        return view('suporte'); // Exibe a página de suporte
    }

    public function criarTicket(Request $request)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'mensagem' => 'required|string',
        ]);

        Ticket::create([
            'titulo' => $request->titulo,
            'mensagem' => $request->mensagem,
            'status' => 'aberto',
        ]);

        return redirect()->route('suporte')->with('status', 'Ticket criado com sucesso!');
    }
}
