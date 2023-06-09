<!doctype html>
<html lang="pt-br">
  <head>
    <title>Formulário de Contato</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../Assets/cssindex.css">
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
        <button type="button" class="btn btn-outline-primary me-2" onclick="window.location.href = 'painellogin.php';">Logar</button>
        <button type="button" class="btn btn-primary" onclick="window.location.href = 'registro.php';">Registra-se</button>
      </div>
    </header>
    <div id="wrapper">
   <div class="overlay"></div>
    
        <!-- Sidebar -->
    <nav class="navbar navbar-inverse fixed-top" id="sidebar-wrapper" role="navigation">
     <ul class="nav sidebar-nav">
       <div class="sidebar-header">
       <div class="sidebar-brand">
         <a href="Principal.php">Sigma City</a></div></div>
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
      <li><a href="membros.php">Membros</a></li>
      <li><a href="lojaadd.php">Adicionais a venda</a></li>
      <li><a href="#awards">Financeiro</a></li>
      </ul>
      </li>
      <li><a href="leisrp.php">Leis RP</a></li>
      <li><a href="youtubers.php">Youtubers do servidor</a></li>
      <li><a href="sociaisrede.php">Redes sociais</a></li>
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








  <div class="container-xl">
	<div class="row">
		<div class="col-md-8 mx-auto">
			<div class="contact-form">
				<h1>Fale Conosco</h1>
				<p class="hint-text">Aqui é a aba para dar sugestões e fazer reclamações no geral</p>
				<form action="#" method="post">
					<div class="row">
						<div class="col-sm-6">
							<div class="form-group">
								<label for="inputFirstName">Primeiro Nome</label>
								<input type="text" class="form-control" id="inputFirstName" required>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label for="inputLastName">Último Nome</label>
								<input type="text" class="form-control" id="inputLastName" required>
							</div>
						</div>
					</div>            
					<div class="form-group">
						<label for="inputEmail">Email</label>
						<input type="email" class="form-control" id="inputEmail" required>
					</div>
					<div class="form-group">
						<label for="inputMessage">Mensagem</label>
						<textarea class="form-control" id="inputMessage" rows="5" required></textarea>
					</div>
					<input type="submit" class="btn btn-primary" value="Submit">
				</form>
			</div>
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
    Sigma City RP
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
  <script src="../Assets/JavaScript.js"></script>
</html>