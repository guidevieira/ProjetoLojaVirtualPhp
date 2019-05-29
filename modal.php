<?php foreach($produtos as $chave=> $produto):?>
        <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                <button type="button" class="btn btn-primary">Finaliza Compra2</button>
            </div>
            </div>
<?php endforeach?>
        </div>
        </div>