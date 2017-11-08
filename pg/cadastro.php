<?php include_once("topo.php"); ?>
<!-- cadastro de novo usuario -->
      <article id="pg_cadastro">
        <hr>
        <h2> <i class="fa fa-user-plus" aria-hidden="true"></i> Cadastro de Usúario</h2>
        <hr>
        <form id="cadastro" name="Cadastro" method="POST" action="NovoCastro.php">
			  <div class="form-row justify-content-around">
			    <div class="form-group col-md-6">
			      <label for="EmailUser"> <i class="fa fa-envelope-o" aria-hidden="true"></i> Email*</label>
			      <input type="email" class="form-control" id="EmailUser" name="email" placeholder="Digite seu Email" required>
			    </div>
			    <div class="form-group col-md-5">
			      <label for="senha"> <i class="fa fa-unlock-alt" aria-hidden="true"></i>
 Senha*</label>
			      <input type="password" class="form-control" id="senha" name="senha" placeholder="Deve ter entre 8 e 15 caracteres." maxlength="15" required>
			    </div>
			  </div>
		  <div class="form-group">
		    <label for="nome"> <i class="fa fa-user" aria-hidden="true"></i> Nome Completo*</label>
		    <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite seu Nome" required>
		  </div>
		  <div class="form-group col-sm-10"><label class="control-label control-label-required">Sexo*</label>
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
		  <div class="form-row justify-content-around">
				  <div class="form-group col-md-4">
				    <label for="cpf"><b>CPF*</b></label>
				    <input type="text" class="form-control" name="cpf" id="cpf" value="" placeholder="___.___.___-__" maxlength="14" required>
				  </div>
				  <div class="form-group col-md-4">
				    <label for="date"> <i class="fa fa-calendar" aria-hidden="true"></i> Data de Nascimento*</label>
				    <input type="date" class="form-control" name="date" id="date" required>
				  </div>
		  </div>
		  <div class="form-row justify-content-around">
				  <div class="form-group col-md-6">
				    <label for="telefone"><i class="fa fa-phone" aria-hidden="true"></i> Telefone para Contato</label>
				    <input type="text" class="form-control" name="telefone" id="telefone" placeholder="(__) ____-_____" maxlength="15">
				  </div>
				  <div class="form-group col-md-6">
				    <label for="whats"><i class="fa fa-whatsapp" aria-hidden="true"></i> Whatsapp*</label>
				    <input type="text" class="form-control" name="whats" id="whats" placeholder="(__) ____-_____" maxlength="15" required>
				  </div>
		  </div>
		  <br/>
        <h5> <i class="fa fa-map-marker" aria-hidden="true"></i> Endereço de Cadastro </h5>
        <hr>
		  <div class="form-row">
		    <div class="form-group col-md-5">
		      Estado
		      <select id="estado" name="estado" class="form-control">
		        <option selected> Amapá - AP </option>
		        <option>...</option>
		      </select>
		    </div>
		    <div class="form-group col-md-4">
		      Cidade
		      <select id="cidade" name="cidade" class="form-control">
			        <option value="amapa">Amapá</option>
					<option value="calcoene">Calçoene</option>
					<option value="cutias">Cutias</option>
					<option value="ferreiragomes">Ferreira Gomes</option>
					<option value="itaubal">Itaubal</option>
					<option value="laranjaldojari">Laranjal do Jari</option>
					<option value="macapa" selected>Macapá</option>
					<option value="mazagao">Mazagão</option>
					<option value="oiapoque">Oiapoque</option>
					<option value="pedrabranca">Pedra Branca do Amaparí</option>
					<option value="portogrande">Porto Grande</option>
					<option value="pracuuba">Pracuúba</option>
					<option value="santana">Santana</option>
					<option value="serradonavio">Serra do Navio</option>
					<option value="tartarugalzinho">Tartarugalzinho</option>
					<option value="vitoriadojari">Vitória do Jari</option>
		      </select>
		    </div>
		    <div class="form-group col-md-3">
		      Bairro
		       <select id="bairro" name="bairro" class="form-control">
			    <option value="alvorada">Alvorada </option>
				<option value="araxa">Araxá </option>
				<option value="beirol">Beirol</option> 
				<option value="boneazul">Boné Azul</option>
				<option value="brasilnovo">Brasil Novo </option>
				<option value="buritizal">Buritizal </option>
				<option value="cabralzinho">Cabralzinho</option> 
				<option value="central" selected>Central</option> 
				<option value="cidadenova">Cidade Nova </option>
				<option value="congos">Congos </option>
				<option value="infraero">Infraero </option>
				<option value="jardimequatorial">Jardim Equatorial </option>
				<option value="jardimfelicidade">Jardim Felicidade</option> 
				<option value="jesusdenazare">Jesus de Nazaré </option>
				<option value="laguinho">Laguinho </option>
				<option value="marabaixo1">Marabaixo 1</option>
				<option value="marabaixo2">Marabaixo 2</option>
				<option value="marabaixo3">Marabaixo 3</option>
				<option value="marabaixo4">Marabaixo 4</option>
				<option value="marcozero">Marco Zero </option>
				<option value="novaesperanca">Nova Esperança </option>
				<option value="novoburitizal">Novo Buritizal </option>
				<option value="novohorizonte">Novo Horizonte </option>
				<option value="pacoval">Pacoval </option>
				<option value="pedrinhas">Pedrinhas</option> 
				<option value="perpetuosocorro">Perpétuo Socorro</option>
				<option value="santaines">Santa Inês </option>
				<option value="santarita">Santa Rita </option>
				<option value="saolazaro">São Lázaro </option>
				<option value="trem">Trem </option>
				<option value="universidade">Universidade </option>
				<option value="ype">Ype</option>
				<option value="zerao">Zerão </option>
		      </select>
		    </div>
		  </div>
		   <div class="form-row">
			    <div class="form-group col-md-4">
			      <label for="endereco">Endereço</label>
			      <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Rua.: - Av.: Travessa.: ">
			    </div>
			    <div class="form-group col-md-4">
			      <label for="tipoendereco">Tipo de Endereço </label>
			      <select id="tipoendereco" name="tipoendereco" class="form-control">
			        <option value="casa" selected>Casa</option>
			        <option value="apartamento">Apartamento</option>
			        <option value="apartamento">Kit - Net</option>
			        <option value="apartamento">Comercial</option>
			        <option value="apartamento">Outros</option>
			      </select>
			    </div>
			    <div class="form-group col-md-2">
			     	 <label for="numero">N°</label>
			     	 <input type="text" class="form-control" id="numero" name="numero" placeholder="123A">
			     </div>
			     <div class="form-group col-md-2">
			     	 <label for="cep">CEP</label>
			     	 <input type="text" class="form-control" id="cep" name="cep" placeholder="68.900-000" maxlength="10">
			    </div>
			</div>
			<div class="form-row flex-row" id="propagandaEmail">
				<div class="form-group col-md-4 text-center">
					<b>OFERTAS </b><i class="fa fa-bullhorn fa-lg" aria-hidden="true"></i>
			  	</div>
			    <div class="form-group col-md-8">
			    <div class="form-check">
					  <label class="form-check-label">
					    <input class="form-check-input" type="checkbox" value="">
					    Desejo receber no meu Email &mdash; Ofertas da cvmeiodomundo.com.br
					  </label>
					</div>	
			  	</div>
			  </div>
  			<div class="form-row justify-content-around">
  				<button type="submit" class="btn btn-primary col-8"> CADASTRAR</button>
  			</div>
	</form>
      </article>
<?php include_once("rodape.php");?>
