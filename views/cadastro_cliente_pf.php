
 <?php
include_once('menu.php');
?>
 <?php
include_once('header.php');
?>



<div class="container">

    <div class="card shadow mb-4">
        <div class="card-header m-0 font-weight-bold" style="background-color: #CBCFCF"><h4>Cadastro de Clientes Pessoa Fisíca</h4></div>
        <div class="card-body">
          <div class="m-0 font-weight-bold">
          
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                  <!-- Guia Geral -->
                  <a class="nav-item nav-link active " id="nav-geral-tab" data-toggle="tab" href="#nav-geral" role="tab" aria-controls="nav-geral" aria-selected="true">Geral</a>
                  <!-- Guia Cobranças -->
                  <a class="nav-item nav-link" id="nav-cobranca-tab" data-toggle="tab" href="#nav-cobranca" role="tab" aria-controls="nav-cobranca" aria-selected="false">Cobranças</a>
                  <!-- Guia Compras -->
                  <a class="nav-item nav-link" id="nav-compras-tab" data-toggle="tab" href="#nav-compras" role="tab" aria-controls="nav-compras" aria-selected="false">Compras</a>
                  <!-- Guia Pagamentos -->
                  <a class="nav-item nav-link" id="nav-pagamentos-tab" data-toggle="tab" href="#nav-pagamentos" role="tab" aria-controls="nav-pagamentos" aria-selected="false">Pagamentos</a>
                  <!-- Guia historico -->
                  <a class="nav-item nav-link" id="nav-historico-tab" data-toggle="tab" href="#nav-historico" role="tab" aria-controls="nav-historico" aria-selected="false">Histórico</a>
                  <!-- Guia Outros Dados -->
                  <a class="nav-item nav-link" id="nav-outrosdados-tab" data-toggle="tab" href="#nav-outrosdados" role="tab" aria-controls="nav-outrosdados" aria-selected="false">Outros Dados</a>

                </div>
              </nav>
              <div class="tab-content" id="nav-tabContent">
                <!-- Conteudo Geral -->
                <div class="tab-pane fade show active" id="nav-geral" role="tabpanel" aria-labelledby="nav-geral-tab">
              <br>
              <form>
  <div class="form-group cor-laranja">
  <div class="form-row">

      <div class="form-group col-md-1">
      <label for="codigo">Codigo</label>
     <input type="number" class="form-control" id=codigo name="codigo">
    </div>
    <div class="form-group col-md-2">
      <label for="cpf">CPF</label>
      <input type="text" class="form-control" id="cpf" placeholder="000.000.000-00" name="cpf">
    </div>
    <div class="form-group col-md-4">
      <label for="primeiroNome">Primero nome</label>
      <input type="text" class="form-control" id="primeiroNome" name="primeiroNome">
    </div>
  
  <div class="form-group col-md-4">
    <label for="fantasia">Sobre nome</label>
    <input type="text" class="form-control" id="fantasia" name="fantasia">
  </div>
  <div class="form-group col-md-3">
    <label for="isEstadual">Inscrição estadual</label>
    <input type="text" class="form-control" id="isEstadual" name="isEstadual">
  </div>
  
    <div class="form-group col-md-3">
      <label for="rg">RG</label>
      <input type="text" class="form-control" id="rg" name="rg">
    </div>
    <div class="form-group col-md-2">
    <label for="cep">CEP</label>
    <input type="number" class="form-control" id="cep" name="cep">
  </div>
    <div class="form-group col-md-4">
      <label for="endereco">Endereço</label>
      <input type="text" class="form-control" id="endereco" name="endereco" >
    </div>

    <div class="form-group col-md-2">
      <label for="bairro" val>Bairro</label>
      <input type="text" class="form-control" id="bairro" name="bairros">
    </div>

    <div class="form-group col-md-1">
      <label for="numero">Numero</label>
      <input type="number" class="form-control" id="numero" name="numero">
    </div>

    <div class="form-group col-md-3">
      <label for="complemento">Complemento</label>
      <input type="text" class="form-control" id="complemento" name="complemento">
      <div><a href="" class></a></div>
    </div>
    <div class="form-group col-md-3">
      <label for="numeroTelefone">Numero Telefone</label>
      <input type="tel" class="form-control" id="numeroTelefone" name="numeroTelefone">
    </div>
    <div class="form-group col-md-3">
      <label for="estados">Estados</label>
      <select id="estados" class="form-control">
      <option value="estado">Selecione o Estado</option> 
    <option value="ac">Acre</option> 
    <option value="al">Alagoas</option> 
    <option value="am">Amazonas</option> 
    <option value="ap">Amapá</option> 
    <option value="ba">Bahia</option> 
    <option value="ce">Ceará</option> 
    <option value="df">Distrito Federal</option> 
    <option value="es">Espírito Santo</option> 
    <option value="go">Goiás</option> 
    <option value="ma">Maranhão</option> 
    <option value="mt">Mato Grosso</option> 
    <option value="ms">Mato Grosso do Sul</option> 
    <option value="mg">Minas Gerais</option> 
    <option value="pa">Pará</option> 
    <option value="pb">Paraíba</option> 
    <option value="pr">Paraná</option> 
    <option value="pe">Pernambuco</option> 
    <option value="pi">Piauí</option> 
    <option value="rj">Rio de Janeiro</option> 
    <option value="rn">Rio Grande do Norte</option> 
    <option value="ro">Rondônia</option> 
    <option value="rs">Rio Grande do Sul</option> 
    <option value="rr">Roraima</option> 
    <option value="sc">Santa Catarina</option> 
    <option value="se">Sergipe</option> 
    <option value="sp">São Paulo</option> 
    <option value="to">Tocantins</option>
      </select>
      </div>

      <div class="form-group col-md-3">
      <label for="cidade">Cidade</label>
      <select id="cidade" class="form-control">
      <option class="ma" value="cidade1">Selecione a Cidade</option> 
  <option class="ma" value="cidade1">Cidade 2</option> 
  <option class="sp" value="cidade1">Cidade 3</option> 
  <option class="ro"  value="cidade1">Cidade 4</option> 
  <option class="ro" value="cidade1">Cidade 5</option> 
  <option class="ma" value="cidade1">Cidade 6</option> 
  <option class="sp" value="cidade1">Cidade 7</option> 
  <option class="ro" value="cidade1">Cidade 8</option> 
  <option class="sp" value="cidade1">Cidade 9</option> 
      </select>
      </div>
    
          <div class="card">
          <div>Tipos de Clientes</div>
          <div class="form-check form-check-inline">
  <input class="form-check-input " type="checkbox" id="clientes" value="clientes">
  <label class="form-check-label" for="clientes">Clientes</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="fornecedores" value="fornecedores">
  <label class="form-check-label" for="fornecedores">Forncedores</label>
</div>

<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="ambos" value="ambos">
  <label class="form-check-label" for="ambos">Ambos</label>
</div>


</div>

  </div> 
  </div>
    
</form>

           
               
                <!-- Inicio Botões  -->
                <div>
                <hr class="sidebar-divider my-0"><br>
                <a href="#" class="btn btn-success btn-icon-split">
                    <span class="icon text-white-50">
                    <i class="fas fa-check"></i>
                    </span>
                    <span class="text">Salvar</span>
                  </a>
                  
                  <a href="clientes_lista.php" class="btn btn-dark btn-icon-split">
                    <span class="icon text-white-50">
                    <i class="fas fa-angle-left"></i>
                    </span>
                    
                    <span class="text">Voltar </span>
                  </a>
                
                </div>
                 <!-- Fim Botões  -->
                
                </div>
                <!-- Conteudo Cobranças -->
                <div class="tab-pane fade" id="nav-cobranca" role="tabpanel" aria-labelledby="nav-cobranca-tab">Cobrança</div>              
                <!-- Conteúdo compras -->
                <div class="tab-pane fade" id="nav-compras" role="tabpanel" aria-labelledby="nav-compras-tab">Compras</div>
                <!-- Conteúdo Pagamentos -->
                <div class="tab-pane fade" id="nav-pagamentos" role="tabpanel" aria-labelledby="nav-pagamentos-tab">Pagamentos</div>
                <!-- Conteúdo historico -->
                <div class="tab-pane fade" id="nav-historico" role="tabpanel" aria-labelledby="nav-historico-tab">*historico*</div>
                <!-- Conteúdo Outros Dados -->
                <div class="tab-pane fade" id="nav-outrosdados" role="tabpanel" aria-labelledby="nav-outrosdados-tab">Outros</div>
              </div>
            </div>
        </div>
      </div>

</div>

<?php
require_once ('footer.php');
?>
