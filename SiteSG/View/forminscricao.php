<!doctype html>
<html lang="pt-br">
  <head>
    <title>Inscrição para a equipe SG</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="cssindex.css">
    <style>
    /* Definir a altura máxima da página */
    body {
      max-height: 100vh;
      overflow-y: scroll; /* Habilitar a barra de rolagem vertical */
    }
  </style>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <header class="d-flex flex-wrap d-flex w-100 align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
      </a>

      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <li><a href="Principal.php" class="nav-link px-2 link-secondary">Início</a></li>
        <li><a href="loja.php" class="nav-link px-2 link-dark">Loja do servidor</a></li>
        <li><a href="https://discord.gg/eeqn7gJpTT" class="nav-link px-2 link-dark">Discord</a></li>
        <li><a href="regras.php" class="nav-link px-2 link-dark">Regras servidor</a></li>
        <li><a href="staff.php" class="nav-link px-2 link-dark">Equipe Staff</a></li>
      </ul>

      <div class="col-md-3 text-end">
        <button type="button" class="btn btn-outline-primary me-2" onclick="window.location.href = 'painelloginreg.php';">Logar</button>
        <button type="button" class="btn btn-primary">Registra-se</button>
      </div>
    </header>
    <div id="wrapper">
   <div class="overlay"></div>
    
        <!-- Sidebar -->
    <nav class="navbar navbar-inverse fixed-top" id="sidebar-wrapper" role="navigation">
     <ul class="nav sidebar-nav">
       <div class="sidebar-header">
       <div class="sidebar-brand">
         <a href="index.php">Sigma City</a></div></div>
       <li><a href="forminscricao.php">Trabalhe conosco/Seja staff</a></li>
       <li><a href="sobre.php">Sobre</a></li>
       <li><a href="eventos.php">Eventos</a></li>
       <li><a href="faleconosco.php">Fale conosco</a></li>
       <li class="dropdown">
       <a href="#works" class="dropdown-toggle"  data-toggle="dropdown"> <span class="caret"></span></a>
     <ul class="dropdown-menu animated fadeInLeft" role="menu">
      <div class="dropdown-header">Painel de controle</div>
      <li><a href="avisos.php">Avisos</a></li>
      <li><a href="perfil.php">Perfil</a></li>
      <li><a href="#books">Membros</a></li>
      <li><a href="lojaadd.php">Adicionais a venda</a></li>
      <li><a href="#awards">Financeiro</a></li>
      </ul>
      </li>
      <li><a href="leisrp.php">Leis RP</a></li>
      <li><a href="youtubers.php">Youtubers do servidor</a></li>
      <li><a href="#followme">Redes sociais</a></li>
      </ul>
  </nav>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <button type="button" class="hamburger animated fadeInLeft is-closed" data-toggle="offcanvas">
                <span class="hamb-top"></span>
    			<span class="hamb-middle"></span>
				<span class="hamb-bottom"></span>
            </button>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->


    <div class="container">
    <h1 class="text-center my-1">Formulário para inscrição</h1>
  </div>

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <form>
          <div class="form-group">
          <label for="exampleFormControlInput1">Nome</label>
            <input type="text" class="form-control" placeholder="Nome">
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">Endereço de email</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="nome@exemplo.com">
          </div>
          <div class="form-group">
            <label for="exampleFormControlSelect1">O que deseja ser?</label>
            <select class="form-control" id="exampleFormControlSelect1">
              <option>Selecione...</option>
              <option>Staff</option>
              <option>Desenvolvimento</option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleFormControlTextarea1">Coloque mais informações aqui</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
          <div class="form-group">
            <label for="exampleFormControlFile1">Se quiser, poderá anexar seu currículo aqui</label>
            <input type="file" class="form-control-file" id="exampleFormControlFile1">
          </div>
          <button type="button" class="btn btn-primary text-white">Submit</button>
        </form>
      </div>
    </div>
  </div>






    <footer class="text-center text-white fixed-bottom" style="background-color: #21081a;">
  <!-- Grid container -->
  <div class="container p-4"></div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2023 Copyright:
    <a class="text-white" href="https://mdbootstrap.com/">Sigma City RP</a>
  </div>
  <!-- Copyright -->
</footer>
  </div>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
  <script src="JavaScript.js"></script>
</html>