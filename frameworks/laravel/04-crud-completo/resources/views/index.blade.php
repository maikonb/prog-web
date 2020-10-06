@extends('layouts.principal')

@section('main')

<div class="container">
  <div class="py-5 text-center">
    <h2>Vendas</h2>
  </div>
  <div class="row">

    <!-- Departamentos -->
    <div class="col-md-4" >
      <h3>Departamentos</h3>
      @if (count($departamentos) >0) 

        <ul>
        @foreach($departamentos as $d) 
          <li>[ {{ $d->id }} ] {{ $d->nome }}</li>
        @endforeach
        </ul>
      
      @else
        <h4>Nenhum departamento cadastrado</h4>
      @endif
    </div>

    <!-- Marcas -->
    <div class="col-md-4" >
      <h3>Marcas</h3>
      @if (count($marcas) >0) 

        <ul>
        @foreach($marcas as $m) 
          <li>[ {{ $m->id }} ] {{ $m->nome }}</li>
        @endforeach
        </ul>
      
      @else
        <h4>Nenhuma marca cadastrada</h4>
      @endif
    </div>


    <!-- Produtos -->
    <div class="col-md-4" >
      <h3>Produtos</h3>
      @if (count($produtos) >0) 

        <ul>
        @foreach($produtos as $p) 
          <li>[ {{ $p->id }} ] {{ $p->nome }} - {{ $p->marca->nome }}</li>
        @endforeach
        </ul>
      
      @else
        <h4>Nenhum produto cadastrado</h4>
      @endif
    </div>


  </div>
</div>



@endsection
