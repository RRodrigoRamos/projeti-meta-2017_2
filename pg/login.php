<!-- iniciando a pagina de login  -->
<?php
    session_start();
    include_once("topo.php");
?>
<article id="login" class="">
    <div class="tela">
          <form class="form-signin">
            <h2 class="form-signin-heading">Área para Usuário Cadastrado:</h2>
              <label for="usuario" class="sr-only"> Digite um Usuário</label><i class="fa fa-user" aria-hidden="true"></i>
                <input type="text" name="usuario" class="form-control" placeholder="Digite um Usuário" required autofocus>
              <label for="senha" class="sr-only"> Digite uma Senha</label>
              <i class="fa fa-key" aria-hidden="true"></i>
                <input type="password" name="senha" class="form-control" placeholder="Digite uma Senha" required>
                <div class="checkbox"><br />
                  <label> <input type="checkbox" value="remember-me"><b>Me Lembrar Senha !</b> <i class="fa fa-refresh" aria-hidden="true"></i> </label>
                </div> <br/>
              <button class="btn btn-md btn-primary btn-block" type="submit">Acessar</button>
          </form>
    </div>
</article>
<?php include_once("rodape.php");?>
