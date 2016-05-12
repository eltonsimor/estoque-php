<?php

namespace estoque\Http\Controllers;

use estoque\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;

class ProdutoController extends Controller{

    public function lista(){
      $produtos = DB::select('select * from produtos order by nome');

      return view('produtos.listagem')->withProdutos($produtos);
    }

    public function listaJson(){
      $produtos = DB::select('select * from produtos order by nome');
      return response()->json($produtos);
    }

    public function downloadFile(){
      return response()->download('caminho do arquivo que será feito o download.');
    }

    public function mostrar($id){
      $produtos = DB::select('select * from produtos where id = ? ', [$id]);

      if(empty($produtos)){
          return 'Produto não encontrado!';
      }

      return view('produtos.detalhes')->withProduto($produtos[0]);
    }

    public function novo(){
      return view('produtos.formulario');
    }

    public function adicionar(){
      $produto = Request::all();
      DB::insert('insert into produtos (nome, descricao, valor, quantidade) values (?,?,?,?) ',
                  array($produto['nome'], $produto['descricao'], $produto['valor'], $produto['quantidade']));

      return redirect()
             ->action('ProdutoController@lista')
             ->withInput(Request::only('nome'));
    }
}
