<?php 
$usuario = ["logado" => true,"nome"=>"guilherme","nivelAcesso"=> 0];

$produtos = [
    "produto1"=>["nome" => "cursoFullStack",
                "descricao" => "o curso encina programacao",
                "preco"=>1200, "img" => "img/img3.jpg"],

    "produto2"=>["nome" => "cursoAndroid",
                  "descricao" => "o curso encina a fazer app",
                  "preco"=>1400, "img" => "img/img2.jpg"],
    "produto3"=>["nome" => "cursoApple",
                  "descricao" => "o curso encina a fazer app Para Ios",
                  "preco"=>2100 , "img" => "img/img3.jpg"],
    "produto4"=>["nome" => "cursoApple",
                  "descricao" => "o curso encina a fazer app Para Ios",
                  "preco"=>2100 , "img" => "img/img2.jpg"],

                  
];

$categorias = [
    "curso",
    "tutorias",
    "artigos",
    "forum",
    "codigos"
];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Loja Virtual</title>
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
                                <a class="nav-link" href="login.php"  >login</a>
                            </li>
                    
                    <?php endif;?>
        </div>

       
    </nav>
    <nav>
            <ul class="row mt-3 justify-content-center">
                <?php foreach($categorias as $categoria):?>
                <li class="col-md-2">
                    <?=$categoria?>
                </li>
                    <?php endforeach;?>
            </ul>
    </nav>

</header>

    <main class="container mt-5">
        <section class="row">
        <!--Coluna para segura -->
        <?php  foreach($produtos as $chave => $produto){?>
            <div class="col-md-4 mt-3">
                <div class="card" style="width: 18rem;">
                    <img src="<?php echo $produto["img"];?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php  echo $produto["nome"]; ?></h5>
                        <p class="card-text"><?php  echo $produto["descricao"]; ?></p>
                        <h4 class="text-success">R$<?php  echo $produto["preco"]; ?></h4>
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#<?php echo $chave ?>">
                        Compra
                        </button>
                    </div>
                </div>
            </div>
        <?php }?>
        </section>
    </main>


<!-- Modal -->
<?php foreach($produtos as $chave=> $produto):?>
<div class="modal fade" id="<?php echo $chave ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Produto: <?php  echo $produto["nome"]; ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="">
            <div class="form-group">
                <input type="text" name="nomeCliente" placeholder="nome completo">
            </div>
            <div class="form-group">
                <input type="number" name="cpfCliente" placeholder="CPF">
            </div>
            <div class="form-group">
                <input type="number" name="cartaoCliente" placeholder="Cartao De Credito">
            </div>
            <div class="form-group">
                <input type="date" name="DataValidadeCartao" placeholder="Valida Do Credito">
            </div>
            <div class="form-group">
                <input type="number" maxlength="3" name="cvvCartao" placeholder="CVV Do Credito">
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <h4 class="text-sucess">preço total: R$<?php  echo $produto["preco"]; ?></h4>
        <button type="button" class="btn btn-success">Finaliza Compra2</button>
      </div>
    </div>
    <?php endforeach?>
  </div>
</div>
        



        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>