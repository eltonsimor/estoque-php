<html>
  <head>
    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/custom.css" rel="stylesheet">
    <title>Controle de Estoque </title>
    <style>
      nav.navbar.navbar-default {
        background-color: #337ab7;
        border-color: #2e6da4;
        margin-top: 10px;
      }

      nav.navbar.navbar-default a {
        color: white;
      }

      li p.navbar-text, a.navbar-brand {
        color: white!important;
        font-weight: bolder;
      }

      footer.footer {
        background-color: #337ab7;
        border-color: #2e6da4;
        margin-top: 55px;
        color: white;
        border-radius: 5px;
      }

      footer.footer p {
        padding: 10px;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="{{action('ProdutoController@lista')}}">
              Estoque Produtos
            </a>
          </div>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="{{action('ProdutoController@novo')}}">Novo Produto</a></li>
            <li><a href="{{action('ProdutoController@lista')}}">Listagem</a></li>
          </ul>
        </div>
      </nav>
      
      @yield('conteudo')

      <footer class="footer">
        <p>© Direitos Reservados 2016</p>
      </footer>
    </div>
  </body>
</html>
