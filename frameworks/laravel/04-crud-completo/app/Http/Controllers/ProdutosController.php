<?php

namespace App\Http\Controllers;

use App\Models\Departamento;
use App\Models\Marca;
use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produtos = Produto::all();
        return view('produtos.index', compact('produtos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $marcas = Marca::all();
        $departamentos = Departamento::all();
        return view('produtos.create', compact(['marcas', 'departamentos']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $produto = new Produto();
        $produto->nome = $request->nome;
        $produto->preco = $request->preco;
        $produto->estoque = $request->estoque;
        $produto->marca_id = $request->marca;
        $produto->save();

        $produto->departamentos()->sync($request->departamentos);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Produto $produto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Produto $produto)
    {
        $marcas = Marca::all();
        $departamentos = Departamento::all();
        return view(
            'produtos.edit', 
            compact(['marcas', 'departamentos', 'produto'])
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produto $produto)
    {
        $produto->nome = $request->nome;
        $produto->preco = $request->preco;
        $produto->estoque = $request->estoque;
        $produto->marca_id = $request->marca;
        $produto->save();

        $produto->departamentos()->sync($request->departamentos);        
        return redirect()->route('produtos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
