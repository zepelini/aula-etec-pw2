@extends('layout')
@section('content')
    <article>
        <h1>
            Produtos
            <a class="btn btn-primary" href='{{ route('produto.inserir')}}'>
                Inserir produto
            </a>
        </h1>

        <table class="table">
            <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Nome</th>
                  <th scope="col">Preço</th>
                  <th scope="col">&nbsp;</th>
                </tr>
              </thead>
              <tbody>
                    @foreach ($produtos as $produto)
                        <tr>
                            <td>
                                {{$produto->id}}
                            </td>
                            <td>
                                {{$produto->nome}}
                            </td>
                            <td>
                                {{$produto->preco}}
                            </td>
                            <td>
                                <a class="btn btn-success" href='{{ route('produto.alterar', ["id" => $produto->id])}}'>
                                    Editar
                                </a>
                                <a class="btn btn-danger" href='#'>
                                    Apagar
                                </a>
                            </td>
                        </tr>
                    @endforeach
              </tbody>
        </table>
    </article>
@endsection