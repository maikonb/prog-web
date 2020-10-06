@extends('layouts.principal')

@section('main')

<div class="container">
    <div class="py-5 text-center">
        <h2>Departamento</h2>
    </div>
    <div class="row">
        <h3>
          ID: {{ $departamento->id }}
        </h3>
    </div>
    <div class="row">       
        <h3>
          Nome: {{ $departamento->nome }}
        </h3>          
    </div>
    
    <div class="row mt-5">
      
      <h4>Produtos:</h4>

      <div class="col-md-12" >
        
        @if(count($produtos) == 0)
          <p> Nenhum produto associado.</p>
        @else 
          <ul>
          @foreach($produtos as $produto)
            <li> {{ $produto->nome }} </li>
          @endforeach
          </ul>
        @endif

      </div>
    </div>        

    <div class="row mt-5">
      <a href="{{ route('departamentos.index') }}" 
        class="btn btn-primary" role="button" aria-pressed="true">Voltar</a>
    </div>
  </div>

</div>

@endsection