<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Apolice;
use App\Models\Plano;
use Illuminate\Http\Request;
use Carbon\Carbon;

class PlanoController extends Controller
{
    // Método para exibir a página de comparação
    public function showComparisonForm()
    {
        $planos = Plano::all(); // Recuperar todos os planos para exibição
        return view('comparacao', compact('planos'));
    }

    // Método para comparar planos
    public function comparar(Request $request)
    {
        $request->validate([
            'planos' => 'required|array', // Certifica-se de que 'planos' é um array
            'planos.*' => 'exists:planos,id', // Verifica se cada ID existe na tabela de planos
        ]);

        if (empty($request->input('planos'))) {
            return redirect()->route('compararPlanosForm')->with('error', 'Nenhum plano selecionado para comparação.');
        }

        // Recuperar os planos selecionados
        $planosSelecionados = Plano::whereIn('id', $request->input('planos'))->get();

        // Exibir os planos lado a lado para comparação
        return view('comparacao_resultado', compact('planosSelecionados'));
    }

    public function finalizarCompra($id)
    {
        // Busca o plano pelo ID
        $plano = Plano::findOrFail($id);
        
        // Retorna a view de finalização de compra
        return view('finalizar-compra', compact('plano'));
    }

    public function confirmarCompra(Request $request, $id)
    {
        $user = Auth::user(); // Corrigido para usar Auth::user()
        if (!$user) {
            return redirect()->route('login')->withErrors(['msg' => 'É necessário estar logado para concluir a compra.']);
        }

        $plano = Plano::findOrFail($id);

        // Cria a nova apólice
        Apolice::create([
            'user_id' => $user->id,
            'plano_id' => $plano->id,
        ]);

        return redirect()->route('perfil')->with('success', 'Compra concluída com sucesso! Seu plano foi adicionado à sua conta.');
    }

    public function showCompra()
    {
        // Carrega todos os planos para exibir na página de compra
        $planos = Plano::all();
        return view('comprar', compact('planos'));
    }
    public function detalhes($id)
    {
        // Busque o plano pelo ID
        $plano = Plano::findOrFail($id);
        
        // Retorne a view de detalhes do plano com os dados do plano
        return view('detalhes', compact('plano'));

    }
       
    public function showSearchForm(Request $request)
    {
        // Obtenha tipos e faixas etárias distintas
        $tipos = Plano::select('tipo')->distinct()->get();
        $faixaEtarias = Plano::select('faixaetaria')->distinct()->get();

        // Query inicial para buscar planos
        $planos = Plano::query();

        // Construindo a mensagem de filtros aplicados
        $filtrosAplicados = "Filtros aplicados: ";

        // Filtro de tipo
        if ($request->filled('tipo')) {
            $planos->where('tipo', $request->tipo);
            $filtrosAplicados .= "Tipo: " . ucfirst($request->tipo) . "; ";
        } else {
            $filtrosAplicados .= "Tipo: Todos; ";
        }

        // Filtro de faixa etária (aplicado somente se estiver preenchido)
        if ($request->filled('faixaetaria')) {
            if (strpos($request->faixaetaria, '-') !== false) {
                [$idadeMinFiltro, $idadeMaxFiltro] = explode('-', $request->faixaetaria);
                $planos->where(function ($query) use ($idadeMinFiltro, $idadeMaxFiltro) {
                    $query->whereRaw("CAST(SUBSTRING_INDEX(faixaetaria, '-', 1) AS UNSIGNED) <= ?", [$idadeMaxFiltro])
                        ->whereRaw("CAST(SUBSTRING_INDEX(faixaetaria, '-', -1) AS UNSIGNED) >= ?", [$idadeMinFiltro]);
                });
                $filtrosAplicados .= "Faixa Etária: " . $request->faixaetaria . "; ";
            } else {
                $idadeMinFiltro = (int) $request->faixaetaria;
                $planos->whereRaw("CAST(SUBSTRING_INDEX(faixaetaria, '-', -1) AS UNSIGNED) >= ?", [$idadeMinFiltro]);
                $filtrosAplicados .= "Faixa Etária: " . $request->faixaetaria . "; ";
            }
        } else {
            $filtrosAplicados .= "Faixa Etária: Todas";
        }

        // Executa a consulta e obtém os resultados
        $resultados = $planos->get();

        // Se não houver resultados, exibe uma mensagem informativa
        if ($resultados->isEmpty()) {
            return view('pesquisar_planos', compact('tipos', 'faixaEtarias'))
                ->with('mensagem', 'Nenhum plano encontrado com os critérios selecionados.')
                ->with('filtrosAplicados', $filtrosAplicados);
        }

        return view('pesquisar_planos', compact('resultados', 'tipos', 'faixaEtarias', 'filtrosAplicados'));
    }
}
