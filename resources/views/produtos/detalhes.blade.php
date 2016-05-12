@extends('layout.principal')
@section('conteudo')
<h1>Detalhes do Produto </h1>
<ul>
  <li><b>Codigo: </b>{{$produto->id}}</li>
  <li><b>Nome: </b>{{$produto->nome}}</li>
  <li><b>Descrição: </b>{{$produto->descricao}}</li>
  <li><b>Quantidade: </b>{{$produto->quantidade}}</li>
  <li><b>Valor: </b>R$ {{$produto->valor}}</li>
</ul>
<a href="/produtos">Voltar</a>
@stop
