@extends('layouts.principal')

@section('main')

<div class="container">
    <div class="py-5 text-center">
        <h2>Cadastro de Marcas</h2>
    </div>
    <div class="row mb-2">
        <div class="col-md-12" >
            <a href="{{ route('marcas.create') }}" class="btn btn-primary active" 
                role="button" aria-pressed="true">Nova Marca</a>
        </div>
    </div>

    @if (session('msg_success'))
    <div class="alert alert-success" role="alert">
        {{ session('msg_success') }}
    </div>
    @endif

    @if (session('msg_error'))
    <div class="alert alert-danger" role="alert">
        {{ session('msg_error') }}
    </div>
    @endif

    @if (count($marcas) >0) 
    <div class="row">
        <div class="col-md-12" >

            <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>

                @foreach($marcas as $d) 
                <tr>
                    <th scope="row">{{ $d->id }}</th>
                    <td>{{ $d->nome }}</td>
                    <td>
                        <form action="{{ route('marcas.destroy', $d->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">
                                Apagar
                            </button>                            
                            <a class="btn btn-primary btn-sm active" 
                                href="{{ route('marcas.show', $d->id) }}">
                                Detalhes
                            </a>
                            <a class="btn btn-secondary btn-sm active" 
                                href="{{ route('marcas.edit', $d->id) }}">
                                Editar
                            </a>
                        </form>
                    </td>
                </tr>
                @endforeach

            </tbody>
            </table>

        </div>
    </div>
    @endif 

    
</div>

@endsection