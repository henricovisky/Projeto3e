<?php
/* Controller criado com o seguinte comando:

php artisan make: controller Ativo3eController --resource

para traser todo o esqueleto abaixo*/

namespace App\Http\Controllers;

use App\Models\Ativo;
use Illuminate\Http\Request;

class Ativo3eController extends Controller
{
    /**
     * Exibe a lista de ativos
     */
    public function index()
    {
        $ativos = Ativo::all(); // faz o SELECT * FROM ativos;
        return view('ativos.index', compact('ativos')); // Retorna a view 'ativos.index' com os ativos como parâmetro
    }

    /**
     * Exibe o formulário de criação de um ativo.
     */
    public function create()
    {
        return view('ativos.create'); // Retorna a view 'ativos.create'
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Ativo::create($request->all()); // Cria um novo registro com os dados recebidos do formulário
        return redirect('/ativos'); // Redireciona para a página de listagem de ativos
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $ativo = Ativo::findOrFail($id); // Busca o ativo pelo ID ou retorna mensagem de erro 404
        return view('ativos.show', compact('ativo'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $ativo = Ativo::findOrFail($id); // Faz o mesmo que o anterior
        return view('ativos.edit', compact('ativo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $ativo = Ativo::findOrFail($id);
        $ativo->update($request->all()); // Atualiza os dados do ativo com os dados do formulário
        return redirect('/ativos'); // Redireciona para a página de ativos
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $ativo = Ativo::findOrFail($id);
        $ativo->delete(); // Exclui o registro do banco
        return redirect('/ativos');
    }
}
