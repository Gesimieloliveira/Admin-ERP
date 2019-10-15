
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
                
                <a href="cadastro_produtos.php" class="btn btn-success btn-icon-split">
                   <button type="submit" class="btn btn-success">Novo Produto</button>
                  </a>
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
              <div class="table-responsive" id="tabelalistas">
                <table class="table table-striped table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead >
                    <tr  class="cor-laranja">
                      <th>Código</th>
                      <th>Descrição</th>
                      <th>Marca</th>
                      <th>NCM</th>
                      <th>CEST</th>
                      <th>Estoque</th>
                      <th>Preço Venda</th>
                      <th>Custo</th>
                      <th>Lucro</th>
                      <th>Ações</th>


                      
                    </tr>
                  </thead>
                
                  <tbody>
                    <tr>
                      <td>01</td>
                      <td>Coca-Cola</td>
                      <td>Coca</td>
                      <td>1806.00.00</td>
                      <td>1234567</td>
                      <td>15.00</td>
                      <td>R$3,00</td>
                      <td>R$8,00</td>
                      <td>R$5,00</td>
                      
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
                    <td>02</td>
                      <td>Arroz</td>
                      <td>Primavera</td>
                      <td>1905.00.00</td>
                      <td>1234567</td>
                      <td>10.00</td>
                      <td>R$15,00</td>
                      <td>R$5,00</td>
                      <td>R$10,00</td>
                      

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
