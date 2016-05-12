@extends('layout.principal')
@section('conteudo')

<h1>Novo Produto</h1>
<form action="/produtos/adicionar" method="post">
  <input type="hidden" name="_token" value="{{{csrf_token()}}}" />

  <div class="form-group">
    <label><b>Nome:</b></label>
    <input name="nome" class="form-control"/>
  </div>

  <div class="form-group">
    <label><b>Descrição:</b></label>
    <input name="descricao" class="form-control"/>
  </div>

  <div class="form-group">
    <label><b>Valor:</b></label>
    <input name="valor" class="form-control"/>
  </div>

  <div class="form-group">
    <label><b>Quantidade:</b></label>
    <input name="quantidade" type="number" class="form-control"/>
  </div>

  <div class="form-group">
    <button class="btn btn-primary btn-block" type="submit">Cadastrar</button>
  </div>
</form>
@stop
