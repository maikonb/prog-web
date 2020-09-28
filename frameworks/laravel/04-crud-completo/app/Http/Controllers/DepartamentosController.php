<?php

namespace App\Http\Controllers;

use App\Models\Departamento;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class DepartamentosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departamentos = Departamento::all();
        return view('departamentos.index', compact('departamentos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('departamentos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|min:2|unique:departamentos'
        ]);
        $departamento = new Departamento();
        $departamento->nome = $request->nome;
        $departamento->save();
        return redirect()->route('departamentos.index')
            ->with('msg_success', 'Departamento criado com sucesso.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Departamento $departamento)
    {
        $produtos = $departamento->produtos;
        return view('departamentos.show', 
            compact(['departamento', 'produtos']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Departamento $departamento)
    {
        // $departamento = Departamento::find($id);
        return view('departamentos.edit', compact('departamento'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Departamento $departamento)
    {
        $request->validate([
            'nome' => [
                'required', 
                'min:2', 
                Rule::unique('departamentos')->ignore($departamento->id)
            ]
        ]);

        $departamento->nome = $request->nome;
        $departamento->save();

        return redirect()->route('departamentos.index')
            ->with('msg_success', 'Departamento atualizado com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Departamento $departamento)
    {
        if ($departamento->produtos->count() > 0) {
            return back()
                ->with('msg_error', 'Nao foi possivel remover este departamento pois existem produtos relacionados a ele.');
        }
        
        $departamento->delete();

        return redirect()->route('departamentos.index')
            ->with('msg_success', 'Departamento removido com sucesso.');
    }
}
