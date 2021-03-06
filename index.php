<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Locadora de Veiculos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" media="screen" href="css/index.css" />
    <link rel="icon" href="img/car.png" type="image/x-icon"/>

    <!-- Javascript -->
    <script type="text/javascript">
        function att(){
            window.alert ('Usuário não autenticado!') 
        }
    </script>
</head>
<body class="corpo">

    <div class="container logo">
        <div class="row">
            <img src="img/idle.png" class="img-responsive text-center" alt="Idle" width="200px" height="200px"/>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>

            <div class="col-md-4">
                <section class="login-form">
                    <form method="POST" action="validar-login.php" role="login">
                        <input type="text" name="usuario" placeholder="Usuário"  class="form-control input-lg" required/>
                        <br>
                        <input type="password" name="senha" placeholder="Senha" class="form-control input-lg" id="senha"  required />
                        <br>
                        <button type="submit" name="logar" class="btn btn-lg btn-block">Logar</button>
                        <div>
                            <a href="#">Criar conta</a> ou <a href="#">Recuperar senha</a>
                        </div>
                    </form>
                    <?php  
                    if (isset($_SESSION['no_autentic'])):
                        ?>

                        <script>att();</script>

                        <?php  
                    endif;
                    ?>
                </section> 
            </div> 
        </div>
    </div>

    <!-- Optional JavaScript -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>