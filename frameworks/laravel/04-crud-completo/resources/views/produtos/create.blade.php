@extends('layouts.principal')

@section('main')

<div class="container">
    <div class="py-5 text-center">
        <h2>Cadastro de Produtos</h2>
    </div>
    <div class="row">
        <div class="col-md-12" >

            <form action="{{ route('produtos.store') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="nome">Nome do produto</label>
                    <input type="text" class="form-control" id="nome"
                        name="nome" placeholder="Produto" required>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="preco">Preço</label>
                        <input type="number" class="form-control" min="0.00" max="10000.00" 
                            step="0.01"  id="preco" 
                            name="preco" placeholder="Preço em R$" required>
                    </div>                            
                    <div class="form-group col-md-6">
                        <label for="estoque">Estoque</label>
                        <input type="number" class="form-control" id="estoque" 
                            name="estoque" placeholder="Estoque" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="marca">Marca</label>
                    <select class="form-control" id="marca" name="marca" required>
@foreach($marcas as $marca)
                        <option value="{{ $marca->id }}">
                            {{ $marca->nome }}
                        </option>
@endforeach
                    </select>                        
                </div>                    
                <div class="form-group">
                    <label for="departamentos">Selecione os Departamentos</label>
                    <select multiple size="5" class="form-control" id="departamentos" 
                        name="departamentos[]"  aria-describedby="departamentosHelp"
                    >
@foreach($departamentos as $dep) 
                        <option value="{{ $dep->id  }}">
                            {{ $dep->nome  }}
                        </option>
@endforeach
                    </select>
                    <small id="departamentosHelp" class="form-text text-muted">
                        Utilize as teclas 'ctrl' ou 'shift' para selecionar mais que um departamento.
                    </small>                        
                </div>
                <button type="submit" class="btn btn-primary">Salvar</button>
                <a href="index.php" class="btn btn-secondary ml-1" role="button" aria-pressed="true">Cancelar</a>

            </form> 


        </div>
    </div>
</div>

@endsection