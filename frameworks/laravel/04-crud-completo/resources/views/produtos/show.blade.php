@extends('layouts.principal')

@section('main')

<div class="container">
    <div class="py-5 text-center">
        <h2>Produto</h2>
    </div>
    <div class="row">
      <h4>
        <strong>ID:</strong> {{ $produto->id }}
      </h4>
    </div>
    <div class="row">
      <h4>
        <strong>Nome:</strong> {{ $produto->nome }}
      </h4>
    </div>
    <div class="row">
      <h4>
        <strong> Preço: </strong> R$
        {{ number_format($produto->preco, 2, ',', '.') }}
      </h4>
    </div>
    <div class="row">
      <h4>
        <strong>Estoque:</strong> {{ $produto->estoque }}
      </h4>
    </div>
    <div class="row">
      <h4>
        <strong>Marca:</strong> {{ $produto->marca->nome }}
      </h4>
    </div>

    
    <div class="row mt-5">
      
      <h4><strong>Departamentos:</strong></h4>

      <div class="col-md-12" >
        
        @if(count($departamentos) == 0)
          <p> Nenhum departamento associado.</p>

        @else 
          <ul>
          @foreach($departamentos as $dep)
            <li>{{ $dep->nome }}</li>
          @endforeach
          </ul>
        @endif

      </div>
    </div>        

    <div class="row mt-5">
      <a href="{{ route('produtos.index') }}" 
        class="btn btn-primary" role="button" aria-pressed="true">Voltar</a>
    </div>
  </div>

</div>

@endsection