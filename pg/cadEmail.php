<?php require_once("topo.php");?>
<section id="pg_cadEmail">
  <h3> <i class="fa fa-bullhorn fa-3x" aria-hidden="true"></i>
    CADASTRA-SE<br/>FIQUE POR DENTRO DAS NOVAS OFERTAS !
  </h3>
</section>
<article id ="pg_cadEmail" class="row justify-content-center">
  <form id="contato" class="form-signin col-md-8" action="../bd/cadastrarEmail.php" method="POST">
      <h2 class="form-signin-heading">
        Cadastra-se
      </h2>
      <div class="form-group">
        <br/>
        <label for="email">
          Email:
        </label>
        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Email para Cadastro" required>
        <small id="emailHelp" class="form-text text-muted">
            Nós nunca compartilharemos seu email com ninguém!.
        </small>
      </div>
      <br/>
    <button type="submit" class="btn btn-outline-success">CADASTRAR EMAIL</button>
</form>
</article>
<?php require_once("rodape.php");?>
