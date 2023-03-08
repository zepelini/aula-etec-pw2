@extends('layout')
@section('content')
    <article>
        <h1>
            Produtos
            <a  class="btn btn-outline-primary" href='{{ route('produto.listar')}}'>
                Voltar para a listagem
            </a>
        </h1>
        <form action='{{ route('produto.salvar')}}' method="POST">
            @csrf
            
            <div class="form-group">
                <label for='nome'>Nome</span>
                <input name='nome' id='nome' type='text' value="{{$produto->nome}}" class="form-control mb-3" />
            </div>
            <div class="form-group">
                <label for='preco'>Preço</span>
                <input name='preco' id='preco' type='text' value="{{$produto->preco}}" class="form-control mb-3" />
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary mt-3">Salvar</button>
            </div>
        </form>
    </article>
@endsection