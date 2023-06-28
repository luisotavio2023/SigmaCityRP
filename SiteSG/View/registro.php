<!doctype html>
<html lang="en">
  <head>
    <title>Registro SG</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        .bg-image {
            background-image: url('../images/fundolr.jpg');
            background-size: cover;
            background-position: center;
            height: 120vh;
        }

        body, html {
            height: 100%;
        }

    </style>
  </head>
  <body>
  <div class="bg-image">
    <br><br>
  <div class="container mt-5 p-0">
        <div class="row justify-content-center d-flex align-items-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">Registre-se</h2>
                        <form method="post" action="../Model/BancoDeDados.php" id="form2">
                            <div class="form-group">
                                <label for="id">Email</label>
                                <input type="email" class="form-control" id="inputEmail" name="InputEmail" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Senha</label>
                                <input type="password" class="form-control" id="inputPassword" name="inputPassword" required>
                            </div>
                            <div class="form-group">
                                <label for="Idgame">Seu id no jogo</label>
                                <input type="text" class="form-control" id="inputId" name="inputId" required>
                            </div>
                            <div class="form-group">
                                <label for="NickD">Seu nick no discord</label>
                                <input type="text" class="form-control" id="inputdisc" name="inputdisc" required>
                            </div>
                            <div class="form-group">
                                <label for="nickG">Nick no jogo</label>
                                <input type="text" class="form-control" id="inputNickg" name="inputNickg" required>
                            </div>
                            <div class="form-group">
                                <label for="Taggame">Sua tag no jogo é</label>
                                <input type="text" class="form-control" id="inputTagG" name="inputTagG" required>
                            </div>
                            <div class="form-group">
                                <label for="NomeVR">Nome da vida real</label>
                                <input type="text" class="form-control" id="inputNome" name="inputNome" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Imagem de perfil:</label>
                                <input type="file" id="InputFoto" name="arquivo" accept=".jpg, .jpeg, .png" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Registrar</button>
                        </form>
                    </div>
                    <div class="card-footer text-center">
                        <a href="esqueci-senha.html">Esqueci minha senha</a> | <a href="painellogin.php">Já tem login?</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>