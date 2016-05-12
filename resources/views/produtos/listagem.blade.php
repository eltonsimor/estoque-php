@extends('layout.principal')
@section('conteudo')

<h1>Listagem de Produtos.</h1>
@if(old('nome'))
  <div class="alert alert-success">
    <strong>Sucesso!</strong> O produto {{old('nome')}} foi adiconado.
  </div>
@endif

@if(empty($produtos))

  <div class="alert alert-danger">
      Nenhuma Lista Cadastra!
  </div>

@else

  <table class="table table-striped table-bordered table-hover">
    <tr>
      <th>Nome</th>
      <th>Valor</th>
      <th>Descrição</th>
      <th>Quantidade</th>
      <th>Ações</th>
    </tr>

    @foreach($produtos as $produto)

      <tr class="{{$produto->quantidade <= 1 ? 'danger': ''}}">
        <td>{{$produto->nome}}</td>
        <td>R$ {{$produto->valor}}</td>
        <td>{{$produto->descricao}}</td>
        <td>{{$produto->quantidade}}</td>
        <td>
            <a href="/produtos/mostrar/{{$produto->id}}">
              Visualizar
            </a>
        </td>
      </tr>

    @endforeach
  </table>
@endif
  <h4>
    <span class="label label-danger pull-right">Um ou menos itens no estoque.</span>
  </h4>
@stop
