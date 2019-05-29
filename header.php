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