<?php require_once("topo.php");?>
<section id="pg_contato">
  <h1> <i class="fa fa-envelope-o" aria-hidden="true"></i> Envie sua Mensagem...  </h1>
</section>
<article id ="pg_contato" class="row justify-content-center">
  <form id="contato" class="form-signin col-md-8" action="../bd/enviar_mensagem.php" method="POST">
      <h2 class="form-signin-heading">
        Podemos ajudar? Sugestão Criticas...
      </h2>
      <div class="form-group">
        <label for="nomeUsuario">
            Nome:
        </label>
        <input type="text" class="form-control" id="nomeUsuario" placeholder="Nome" required autofocus>
      </div>
      <div class="form-group">
        <label for="email">
          Email:
        </label>
        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Email para Contato" required>
        <small id="emailHelp" class="form-text text-muted">
            Nós nunca compartilharemos seu email com ninguém!.
        </small>
      </div>
      <div class="form-group">
        <label for="telefoneContato">
            Telefone:
        </label>
        <input type="text" class="form-control" id="telefoneContato" placeholder="(96)_____-_____ " maxlength="14">
      </div>
      <div class="form-group">
        <label for="mensagemContato">
            MENSAGEM:
        </label>
        <textarea rows="4" cols="50" class="form-control" id="mensagemContato" name="mensagemContato">Sugestão, Criticas...
        </textarea>
      </div>

<button type="submit" class="btn btn-outline-success">ENVIAR MENSAGEM</button>
</form>
</article>
<?php require_once("rodape.php");?>
