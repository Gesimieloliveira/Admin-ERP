
<?php
include_once('menu.php');
?>
<?php
include_once("header.php");
?>


<body>
<div class="container">
        <!-- Inicio Botões  -->
      
        <div>
                <hr class="sidebar-divider my-0"><br>
                <div class="btn-group" role="group">
              <button id="btnGroupDrop1" type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 Novo Cliente
                  </button>
               <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
               <a class="dropdown-item" href="cadastro_cliente_pf.php">Pesso Física</a>
               <a class="dropdown-item" href="cadastro_cliente_pj.php">Pessoa Jurídica</a>
           </div>
        </div>
                  <!---->
              <div class="btn-group" role="group">
              <button id="btnGroupDrop1" type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 Mais Opções
                  </button>
               <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
               <a class="dropdown-item" href="#">Importar</a>
               <a class="dropdown-item" href="#">Relatorio</a>
           </div>
        </div>
                  
               
               
                </div>
                 <!-- Fim Botões  -->
                 
                 <br>
                 
                 <hr class="sidebar-divider my-0"><br>
                  <!-- Pesquisar -->
                  <div>
                  <form class="navbar-form">
                    <div class="form-group">
                        <input class="form-control" type="text" name="search" placeholder="Pesquisar"/>
                    </div>
                   
                </form>
                </div>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-0">
           
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead >
                    <tr  class="cor-laranja">
                      <th>Nome</th>
                      <th>CNPJ / CPF</th>
                      <th>Endereço</th>
                      <th>Cidade</th>
                      <th>Telefone</th>
                      <th>Ações</th>
                    </tr>
                  </thead>
                
                  <tbody>
                    <tr>
                      <td>Gesimiel de Oliveira</td>
                      <td>000.000.000-00</td>
                      <td>Av São Paulo</td>
                      <td>Cacoal/RO</td>
                      <td>(69)9 9948-89925</td>
                      <td>
                      <a href="#" class="btn btn-info btn-sm  espaco-acao-lista"a>
                      <i class="fas fa-eye"></i>
                      <a href="#" class="btn btn-success btn-sm  espaco-acao-lista"a>
                      <i class="fas fa-edit"></i>
                      <a href="#" class="btn btn-danger btn-sm"a>
                      <i class="fas fa-trash-alt"></i>
         
                                            
                      </td>
                    </tr>
                    <tr>
                      <td>Nayara Pereira</td>
                      <td>111.1111.111-00</td>
                      <td>Rua São Jose</td>
                      <td>Pimenta Bueno/RO</td>
                      <td>(69)9 8116-5010</td>
                      <td>   
                      <a href="#" class="btn btn-info btn-sm  espaco-acao-lista"a>
                      <i class="fas fa-eye"></i>
                      <a href="#" class="btn btn-success btn-sm  espaco-acao-lista"a>
                      <i class="fas fa-edit"></i>
                      <a href="#" class="btn btn-danger btn-sm"a>
                      <i class="fas fa-trash-alt"></i>
         
                      </td>
                    </tr>
                  
                  </tbody>
                  
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
</div>



<?php

require_once("footer.php");

?>
