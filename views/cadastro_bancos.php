
 <?php
include_once('menu.php');
?>
 <?php
include_once('header.php');
?>



<div class="container">

    <div class="card shadow mb-4">
        <div class="card-header m-0 font-weight-bold" style="background-color: #CBCFCF"><h4>Cadastro de Bancos</h4></div>
        <div class="card-body">
          <div class="m-0 font-weight-bold">
          
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                  <!-- Guia Geral -->
                  <a class="nav-item nav-link active" id="nav-geral-tab" data-toggle="tab" href="#nav-geral" role="tab" aria-controls="nav-geral" aria-selected="true">Geral</a>
                  <!-- Guia Endereços -->
                  <a class="nav-item nav-link" id="nav-enderecos-tab" data-toggle="tab" href="#nav-enderecos" role="tab" aria-controls="nav-enderecos" aria-selected="false">Endereços</a>
                  <!-- Guia Cobranças -->
                  <a class="nav-item nav-link" id="nav-cobranca-tab" data-toggle="tab" href="#nav-cobranca" role="tab" aria-controls="nav-cobranca" aria-selected="false">Cobranças</a>
                  <!-- Guia Compras -->
                  <a class="nav-item nav-link" id="nav-compras-tab" data-toggle="tab" href="#nav-compras" role="tab" aria-controls="nav-compras" aria-selected="false">Compras</a>
                  <!-- Guia Pagamentos -->
                  <a class="nav-item nav-link" id="nav-pagamentos-tab" data-toggle="tab" href="#nav-pagamentos" role="tab" aria-controls="nav-pagamentos" aria-selected="false">Pagamentos</a>
                  <!-- Guia Fiscais e Tributações -->
                  <a class="nav-item nav-link" id="nav-fiscaistributos-tab" data-toggle="tab" href="#nav-fiscaistributos" role="tab" aria-controls="nav-fiscaistributos" aria-selected="false">Fiscais e Tributações</a>
                  <!-- Guia Outros Dados -->
                  <a class="nav-item nav-link" id="nav-outrosdados-tab" data-toggle="tab" href="#nav-outrosdados" role="tab" aria-controls="nav-outrosdados" aria-selected="false">Outros Dados</a>

                </div>
              </nav>
              <div class="tab-content" id="nav-tabContent">
                <!-- Conteudo Geral -->
                <div class="tab-pane fade show active" id="nav-geral" role="tabpanel" aria-labelledby="nav-geral-tab">
              <br>
              <form>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  
</form>

           
                <!-- Inicio Botões  -->
                <div>
                <hr class="sidebar-divider my-0"><br>
                <a href="#" class="btn btn-info btn-icon-split">
                    <span class="icon text-white-50">
                    <i class="fas fa-check"></i>
                    </span>
                    <span class="text">Salvar</span>
                  </a>
                  <a href="#" class="btn btn-warning btn-icon-split">
                    <span class="icon text-white-50">
                    <i class="fas fa-user-edit"></i>
                    </span>
                    <span class="text">Editar</span>
                  </a>
                  <a href="#" class="btn btn-danger btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fas fa-trash"></i>
                    </span>
                    
                    <span class="text">Excluir</span>
                  </a>
                
                </div>
                 <!-- Fim Botões  -->
                 
                
                </div>
                <!-- Conteudo Cobranças -->
                <div class="tab-pane fade" id="nav-cobranca" role="tabpanel" aria-labelledby="nav-cobranca-tab">-----</div>
                <!-- Conteúdo Endereços -->
                <div class="tab-pane fade" id="nav-enderecos" role="tabpanel" aria-labelledby="nav-enderecos-tab">+-+-+-+</div>                
                <!-- Conteúdo compras -->
                <div class="tab-pane fade" id="nav-compras" role="tabpanel" aria-labelledby="nav-compras-tab">+-+-+-+</div>
                <!-- Conteúdo Pagamentos -->
                <div class="tab-pane fade" id="nav-compras" role="tabpanel" aria-labelledby="nav-compras-tab">+-+-+-+</div>
                <!-- Conteúdo Fiscais e Tributações -->
                <div class="tab-pane fade" id="nav-fiscaistributos" role="tabpanel" aria-labelledby="nav-fiscaistributos-tab">******</div>
                <!-- Conteúdo Outros Dados -->
                <div class="tab-pane fade" id="nav-outrosdados" role="tabpanel" aria-labelledby="nav-outrosdados-tab">/-/-/-/-</div>
              </div>
            </div>
        </div>
      </div>

</div>

<?php

require_once('footer.php')

?>