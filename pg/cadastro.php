<?php include_once("topo.php"); ?>
<!-- cadastro de novo usuario -->
      <article id="pg_cadastro">
        <h2> Cadastro de Usúario</h2>
        <form id="cadastro" name="Cadastro" action="NovoCastro.php">
			  <div class="form-row">
			    <div class="form-group col-md-6">
			      <label for="EmailUser"> <i class="fa fa-envelope-o" aria-hidden="true"></i> Email*</label>
			      <input type="email" class="form-control" id="EmailUser" name="email" placeholder="Digite seu Email">
			    </div>
			    <div class="form-group col-md-6">
			      <label for="senha"> <i class="fa fa-unlock-alt" aria-hidden="true"></i>
 Senha</label>
			      <input type="password" class="form-control" id="senha" name="senha" placeholder="Digite Senha" maxlength="50">
			    </div>
			  </div>
		  <div class="form-group">
		    <label for="nome"> <i class="fa fa-user" aria-hidden="true"></i> Nome Completo*</label>
		    <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite seu Nome">
		  </div>
		  <div class="form-group"><label class="col-sm-5 control-label control-label-required">Sexo*</label>
			  <div class="col-md-7">
			  	<div class="col-xs-6 col-sm-4 radio d-inline">
			  		<input type="radio" id="homem" name="sexo" value="M">
			 		 <label for="homem">Masculino</label>
			 	</div>
			 	<div class="col-xs-6 col-sm-4 radio d-inline">
			  		<input type="radio" id="mulher" name="sexo" value="F">
			 	 	<label for="mulher">Feminino</label>
			 	</div>
			  </div>
		  </div>
		  <div class="form-group">
		    <label for="cpf"><i class="fa fa-id-card-o" aria-hidden="true"></i> <b>CPF*</b></label>
		    <input class="form-control" name="cpf" value="" placeholder="___.___.___-__" maxlength="14">
		  </div>
		  <div class="form-group">
		    <label for="inputAddress2">Address 2</label>
		    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
		  </div>
		  <div class="form-row">
		    <div class="form-group col-md-6">
		      <label for="inputCity">City</label>
		      <input type="text" class="form-control" id="inputCity">
		    </div>
		    <div class="form-group col-md-4">
		      <label for="inputState">State</label>
		      <select id="inputState" class="form-control">
		        <option selected>Choose...</option>
		        <option>...</option>
		      </select>
		    </div>
		    <div class="form-group col-md-2">
		      <label for="inputZip">Zip</label>
		      <input type="text" class="form-control" id="inputZip">
		    </div>
		  </div>
  <button type="submit" class="btn btn-primary">CADASTRAR</button>
</form>
      </article>
<?php include_once("rodape.php");?>
