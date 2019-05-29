<!DOCTYPE html>
<html lang="en">
<?php include "head.php"?>
<body>

<?php include "header.php";?>



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
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal" >
                        Compra
                        </button>
                    </div>
                </div>
            </div>
        <?php }?>
        </section>
    </main>


<!-- Modal -->

<?php include "modal.php"?>
        



        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>