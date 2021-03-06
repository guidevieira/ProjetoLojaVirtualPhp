<?php

include_once "funcoes.php"; 
function validarCompra($dadosCompras){

    $erros = [];

if(!$dadosCompras){
        $erros[] = "Nao foi recebido nehum dado para realizae a compra!";   
}

if(!validarNome($dadosCompras["nomeCliente"])){
    $erros[] = "verifique o nome !";
}

if(!validarCpf($dadosCompras["cpfCliente"])){
    $erros[] = "cpf invalido";    
}

if(!validarCartao($dadosCompras["cartaoCliente"])){
    $erros[] = "cartao invalido";
}

if(!validarValidade($dadosCompras['dataValidadeCartao'])){
    $erros = "data de valida venciada";
}

if(!validarCVV($dadosCompras["cvvCartao"])){
    $erros = "cvv invalido";
}

return $erros;
}

$errosValidacao = array(validarCompra($_POST));
?>



<!DOCTYPE html>
<html lang="en">
<?php include "head.php"?>
<body>

<?php include "header.php";?>

    <main class="container">
        <section class="row">
                    <?php
                    if(count($errosValidacao) > 0):?>
                        <div class="col-md-12">
                                <ul>
                                    <?php foreach($errosValidacao as $erro): ?>
                                        <li><?php echo $erro; ?></li>
                                    <?php endforeach; ?>
                                </ul>
                        </div>
                            <?php else: ?>

                        <div class="col-md-12">
                            <div class="alert alert-success" role="alert">
                                ola <?php echo $_POST["nomeProduto"];?> parabens pela sua compra do produto <?php echo $_POST["nomeProduto"];?>
                            </div>
                        </div>
                    <?php endif;?>
            <div class="col-md-12">
                <a href="index.php" class="btn btn-primary" > Volta para home</a>
            </div>
        </section>
    </main>



        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>