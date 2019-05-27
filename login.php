<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

<header>
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="index.php">Loja</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <?php if(isset($usuario) && $usuario != "" &&  $usuario["logado"]):?>
                    <?php  if($usuario["nivelAcesso"] == 0): ?>
                            <li class="nav-item active">
                                <a class="nav-item nav-link active" href="#">Ações <span class="sr-only">(current)</span></a>
                            </li>
                    <?php 
                    else:
                    ?>
                            <li class="nav-item active">
                                <a class="nav-item nav-link active" href="#">Perfil <span class="sr-only">(current)</span></a>
                            </li>

                    <?php endif;?>
                            <li class="nav-item">
                                <a class="nav-link" href="#"> ola <?php echo $usuario["nome"]; ?> </a>
                            </li>
                    <?php else:?>
                            <li class="nav-item">
                                <a class="nav-link" href="login.php">login</a>
                            </li>
                    <?php endif;?>
        </div>
    </nav>

</header>

            <form class="form-signin">
        <div class="text-center mb-4">
            <img class="mb-4" src="/docs/4.3/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
            <h1 class="h3 mb-3 font-weight-normal"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Etiquetas flutuantes</font></font></h1>
            <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Crie controles de formulário com rótulos flutuantes por meio do </font></font><code>:placeholder-shown</code><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">pseudoelemento. </font></font><a href="https://caniuse.com/#feat=css-placeholder-shown"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Funciona no mais recente Chrome, Safari e Firefox.</font></font></a></p>
        </div>

        <div class="form-label-group">
            <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="">
            <label for="inputEmail"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Endereço de e-mail</font></font></label>
        </div>

        <div class="form-label-group">
            <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="">
            <label for="inputPassword"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Senha</font></font></label>
        </div>

        <div class="checkbox mb-3">
            <label>
            <input type="checkbox" value="remember-me"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Lembre de mim
            </font></font></label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">assinar em</font></font></button>
        <p class="mt-5 mb-3 text-muted text-center"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">© 2017-2019</font></font></p>
        </form>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
</body>
</html>