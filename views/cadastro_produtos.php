
 <?php
include_once('menu.php');
?>
 <?php
include_once('header.php');
?>

<div class="container">

    <div class="card shadow mb-4">
        <div class="card-header m-0 font-weight-bold" style="background-color: #CBCFCF"><h4>Cadastro de Produtos </h4></div>
        <div class="card-body">
          <div class="m-0 font-weight-bold">
          
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                  <!-- Guia Geral -->
                  <a class="nav-item nav-link active" id="nav-geral-tab" data-toggle="tab" href="#nav-geral" role="tab" aria-controls="nav-geral" aria-selected="true">Geral</a>
                  <!-- Guia Impostos -->
                  <a class="nav-item nav-link" id="nav-impostos-tab" data-toggle="tab" href="#nav-impostos" role="tab" aria-controls="nav-impostos" aria-selected="false">Impostos</a>
                  <!-- Guia Cobranças 
                  <a class="nav-item nav-link" id="nav-listapreco-tab" data-toggle="tab" href="#nav-listapreco" role="tab" aria-controls="nav-listapreco" aria-selected="false">Lista de preços</a>-->
                  <!-- Guia Compras
                  <a class="nav-item nav-link" id="nav-grade-tab" data-toggle="tab" href="#nav-grade" role="tab" aria-controls="nav-grade" aria-selected="false">Grade</a>-->
                  <!-- Guia Pagamentos
                  <a class="nav-item nav-link" id="nav-pagamentos-tab" data-toggle="tab" href="#nav-pagamentos" role="tab" aria-controls="nav-pagamentos" aria-selected="false">Pagamentos</a>-->
                  <!-- Guia Fiscais e Tributações
                  <a class="nav-item nav-link" id="nav-fiscaistributos-tab" data-toggle="tab" href="#nav-fiscaistributos" role="tab" aria-controls="nav-fiscaistributos" aria-selected="false">Fiscais e Tributações</a>-->
                  <!-- Guia Outros Dados 
                  <a class="nav-item nav-link" id="nav-outrosdados-tab" data-toggle="tab" href="#nav-outrosdados" role="tab" aria-controls="nav-outrosdados" aria-selected="false">Outros Dados</a>-->

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
      <label for="codigo">Código</label>
      <input type="text" class="form-control" id="codigo">
      
    </div>
    <div class="form-group col-md-11">
      <label for="descricao">Descrição do Produto</label>
      <input type="text" class="form-control" id="descricao">
    </div>
    <div class="form-group col-md-2">
      <label for="codigoInterno">Cod. Interno</label>
      <input type="text" class="form-control" id="codigoInterno">
    </div>
  
  <div class="form-group col-md-2">
    <label for="und">Unidade de medida</label>
    <select id="und" class="form-control">
        <option value="un" selected>Unidade</option>
        <option value="cx" selected>Caixa</option>
        <option value="kg" selected>Quilogramas</option>
        <option value="pc" >Pacotes</option>
      </select>
  </div>
  <div class="form-group col-md-2">
    <label for="localProduto">Local do Produto</label>
    <input type="text" class="form-control" id="localProduto" name="localProduto">
  </div>
    
    <div class="form-group col-md-2">
      <label for="marca">Marca</label>
      <input type="text" class="form-control" id="marca" name="marca">
    </div>
    <div class="form-group col-md-2">
    <label for="pesoBruto">Peso Bruto</label>
    <input type="number" class="form-control" id="pesoBruto" name="pesoBruto">
  </div>
    <div class="form-group col-md-2">
      <label for="pesoLiquido">Peso Liquido</label>
      <input type="number" class="form-control" id="pesoLiquido" name="pesoLiquido">
    </div>

    <div class="form-group col-md-2">
      <label for="codBarra">Cod. Barra</label>
      <input type="text" class="form-control" id="codBarra" name="codBarra">
    </div>

    <div class="form-group col-md-2">
      <label for="ncm">NCM</label>
      <input type="text" class="form-control" id="ncm" name="ncm">
    </div>

    <div class="form-group col-md-2">
      <label for="cest">Cest</label>
      <input type="text" class="form-control" id="cest" name="cest">
    </div>

    <div class="form-group col-md-2">
      <label for="estoqueMinimo">Estoque Mínimo</label>
      <input type="text" class="form-control" id="estoqueMinimo" name="estoqueMinimo">
      </div>

      <div class="form-group col-md-1">
      <label for="estoqueMaximo">Máximo</label>
      <input type="text" class="form-control" id="estoqueMaximo" name="estoqueMaximo">
      </div>

      <div class="form-group col-md-3">
      <label for="regraFiscal">Regra Fiscal</label>
      <select class="form-control" id="regraFiscal">
        <option value="">Selecione</option>
        <option value="">Tributado Integralmente 5102</option>
        <option value="">Substituição Tributária 5405</option>
      </select>
      </div>

      <div class="form-group col-md-2">
      <label for="precoCompra">Preço de Compra</label>
      <input type="text" class="form-control" id="precoCompra" placeholder="R$0,00" name="precoCompra">
      </div>


      <div class="form-group col-md-1">
      <label for="margem">Margem</label>
      <input type="text" class="form-control" id="margem" placeholder="%" name="margem" >
      </div>

      <div class="form-goup col-md-2">
      <label for="precoVenda">Preço de Venda</label>
      <input type="text" class="form-control" id="precoVenda" placeholder="R$0,00" name="precoVenda">
      </div>

      <div class="form-group col-md-1 ">
      <label for="descontoPermitido">Desconto</label>
      <input type="text" id="descontoPermitido" class="form-control" placeholder="-R$" name="descontoPermitido">
      </div>

      <div class="form-group col-md-2">
      <label for="precoMinimo">Preço Mínimo</label>
      <input type="text" id="precoMinimo" class="form-control" placeholder="R$0,00" name="precoMinimo">
      </div>

      <div class="form-group col-md-2">
      <label for="precoPromocao">Preço Promocional</label>
      <input type="text" id="precoPromocao" class="form-control" placeholder="Preco de Oferta" name="precoPromocao">
      </div>

      <div class="form-group col-md-2">
      <label for="expiraPromocao">Promoção até</label>
      <input type="date" id="expiraPromocao" class="form-control" name="expiraPromocao">
      
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
                  
                  <a href="produtos_lista.php" class="btn btn-dark btn-icon-split">
                    <span class="icon text-white-50">
                    <i class="fas fa-angle-left"></i>
                    </span>
                    
                    <span class="text">Voltar </span>
                  </a>
                
                </div>
                 <!-- Fim Botões  -->
                
                </div>
                <!-- Conteudo impostos -->
                <div class="tab-pane fade" id="nav-impostos" role="tabpanel" aria-labelledby="nav-impostos-tab">Impostos</div>
                <!-- Conteúdo Endereços 
                <div class="tab-pane fade" id="nav-listapreco" role="tabpanel" aria-labelledby="nav-listapreco-tab">Lista de Preços</div>    -->            
                <!-- Conteúdo compras 
                <div class="tab-pane fade" id="nav-grade" role="tabpanel" aria-labelledby="nav-grade-tab">grade</div> -->
                <!-- Conteúdo Pagamentos 
                <div class="tab-pane fade" id="nav-pagamentos" role="tabpanel" aria-labelledby="nav-compras-tab">+-+-+-+</div>-->
                <!-- Conteúdo Fiscais e Tributações 
                <div class="tab-pane fade" id="nav-fiscaistributos" role="tabpanel" aria-labelledby="nav-fiscaistributos-tab">******</div>-->
                <!-- Conteúdo Outros Dados 
                <div class="tab-pane fade" id="nav-outrosdados" role="tabpanel" aria-labelledby="nav-outrosdados-tab">/-/-/-/-</div>-->
              </div>
            </div>
        </div>
      </div>

</div>



<?php

require_once('footer.php')

?>