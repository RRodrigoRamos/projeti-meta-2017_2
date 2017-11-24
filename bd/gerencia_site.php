<!-- iniciando a pagina de gerencia_site  -->
<?php
    session_start();
    include_once("../pg/topo.php");
?>
<article id="siteUser" role"main">
    <h2 class="text-center">
      Bem Vindo, <i class="fa fa-user" aria-hidden="true"></i> Rodrigo Ramos administração do usuário <i class="fa fa-wrench" aria-hidden="true"></i>
    </h2>
    <section id="cadastro" class="jumbotron text-center">
            <div class="container">
                <h1 class="jumbotron-heading">Cadastrar Produto</h1>
              <h4>
                Você poderá cadastrar produtos com informações relevantes para que pessoas interessadas possam comprar ou entrar em contato para negociação mediante as informações coletadas aqui!
              </h4>
              <p><br/>
                <a href="#" class="btn btn-primary">Cadastrar Novo Produto</a>
                <a href="#" class="btn btn-secondary">Editar Meus Dados</a>
              </p>
            </div>
  </section>
  <hr class="col-12 align-items-center"><br/>
  <h2 class="text-center">
    Produtos Cadastrados do Usuario
    <i class="fa fa-user" aria-hidden="true"></i>
    Rodrigo Ramos
    <i class="fa fa-wrench" aria-hidden="true"></i>
  </h2>
  <br/><hr class="col-12 align-items-center"><br/>
      <div class="row align-items-center">
        <div class="col-sm-3 col-md-3">
           <div class="thumbnail">
             <img data-src="holder.js/100%x100" alt="Produto -CM-"  src="../img/categorias/anuncios/imovel/1.png" data-holder-rendered="true"/>
               <div class="caption">
                   <h4>Titulo Produto </h4>
                      <p>Descrição 1 do Produto <br/>Descrição 2 do Produto<br/>
                          <b>
                            Estado(): Se for casa é localição se for carro KM Rodados
                          </b>
                      </p>
                      <p>
                         <b class="btn btn-outline-primary" role="button">
                           <i class="fa fa-money" aria-hidden="true"></i>
                            R$ 50.500,00
                        </b>
                       <a href="#" class="btn btn-outline-dark" role="button">
                         DELETAR
                       </a>
                     </p>
                     <p>
                      <b class="btn btn-outline-success" role="button">
                        <i class="fa fa-whatsapp" aria-hidden="true"></i>
                         Contato:96 - 99771-1777
                      </b>
                    </p>
             </div>
         </div>
       </div>
    </div>
</article>
<?php include_once("../pg/rodape.php");?>
