
 <?php

require_once ("header.php");
?>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav  sidebar sidebar-dark accordion " style="background-color:#3F4040 " id="accordionSidebar">

      <!-- Sidebar Titulos-->
      <a class="sidebar-brand d-flex align-items-center justify-content-center " href="visao_geral.php">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-award"></i>
        </div>
        <div class="sidebar-brand-text mx-3 "><sup>Erp</sup></div>
      </a>

      <!-- Divisor -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Visão Geral -->
      <li class="nav-item">
        <a class="nav-link" href="visao_geral.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Visão Geral</span></a>
      </li>

      <!-- Divisor -->
      <hr class="sidebar-divider">

      
      
      <!-- Menus de Cadastros-->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Cadastros" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-address-book"></i>
          <span>Cadastros</span>
        </a>
        <div id="Cadastros" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Dados Gerais</h6>
            <a class="collapse-item" href="clientes_lista.php">Clientes/Forncedores</a>
            <a class="collapse-item" href="produtos_lista.php">Produtos</a>
            <a class="collapse-item" href="cadastro_transportadores.php">Transportadoras</a>
            <a class="collapse-item" href="cadastro_usuarios.php">Cadastros de Usuários</a>
            <h6 class="collapse-header">Dados Financeiros</h6>
            <a class="collapse-item" href="cadastro_pagamentos.php">Pagamentos</a>
            <a class="collapse-item" href="cadastro_bancos.php">Banco</a>
            <a class="collapse-item" href="cadastro_planos_contas.php">Plano de contas</a>
            <a class="collapse-item" href="cadastro_conta_corrente.php">Conta corrente</a>
            <a class="collapse-item" href="cadastro_caixas.php">Caixas</a>
            <h6 class="collapse-header">Funcionarios</h6>
            <a class="collapse-item" href="cadastro_cargos.php">Cargos</a>
                               
          </div>
        </div>
      </li>

      <!-- Menus de Vendas-->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Vendas" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-cart-plus"></i>
          <span>Vendas</span>
        </a>
        <div id="Vendas" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Opções</h6>
            <a class="collapse-item" href="#">Notas Fiscais</a>
            <a class="collapse-item" href="#">Pedido de Venda</a>
            <a class="collapse-item" href="#">Orçamentos</a>
            <a class="collapse-item" href="#">PDV - Ponto de Vendas</a>
          </div>
        </div>
      </li>
     
      <!-- Menus Compras -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Compras" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-dice-d6"></i>
          <span>Compras</span>
        </a>
        <div id="Compras" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Opções</h6>
            <a class="collapse-item" href="#">Entrada de Mercadorias</a>
            <a class="collapse-item" href="#">Ajuste de Estoque</a>
            <a class="collapse-item" href="#">Pedido de Compra</a>
            
          </div>
        </div>
      </li>
<!-- Menus Financeiros -->
<li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Financeiro" aria-expanded="true" aria-controls="Financeiro">
    <i class="fas fa-hand-holding-usd"></i>
    <span>Financeiro</span>
  </a>
  <div id="Financeiro" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
      <h6 class="collapse-header">Opções</h6>
      <a class="collapse-item" href="#">Contas a Receber</a>
      <a class="collapse-item" href="#">Contas a Pagar</a>
      <a class="collapse-item" href="#">Recibo avulso</a>
    </div>
  </div>
</li>
 
<!-- Menus Serviços -->
<li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Serviços" aria-expanded="true" aria-controls="collapsePages">
  <i class="fas fa-tools"></i>
    <span>Serviços</span>
  </a>
  <div id="Serviços" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
      <h6 class="collapse-header">Opções</h6>
      <a class="collapse-item" href="#">Serviços Gerais</a>
    </div>
  </div>
</li>
 <!-- Menus Fiscal -->
 <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Fiscal" aria-expanded="true" aria-controls="collapsePages">
        <i class="fas fa-file-alt"></i>
          <span>Fiscal</span>
        </a>
        <div id="Fiscal" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Opções</h6>
            <a class="collapse-item" href="#">Entrada de Mercadorias</a>
            <a class="collapse-item" href="#">Ajuste de Estoque</a>
            <a class="collapse-item" href="#">Pedido de Compra</a>
            
          </div>
        </div>
      </li>
       <!-- Menus Contabilidade -->
  <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Contabilidade" aria-expanded="true" aria-controls="collapsePages">
        <i class="fas fa-calculator"></i>
          <span>Contabilidade</span>
        </a>
        <div id="Contabilidade" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Opções</h6>
            <a class="collapse-item" href="#">Patrimonio</a>
            <a class="collapse-item" href="#">Ajuste de Estoque</a>
            <a class="collapse-item" href="#">Pedido de Compra</a>
            
          </div>
        </div>
      </li>
<!-- Menus Relatórios -->
<li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Relatórios" aria-expanded="true" aria-controls="collapsePages">
    <i class="fas fa-book-open"></i>
    <span>Relatórios</span>
  </a>
  <div id="Relatórios" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
      <h6 class="collapse-header">Opções</h6>
      <a class="collapse-item" href="#">Notas Fiscais</a>
      <a class="collapse-item" href="#">Clientes</a>
      <a class="collapse-item" href="#">Vendas</a>
      <a class="collapse-item" href="#">Produtos</a>
      <a class="collapse-item" href="#">Compras</a>
      <a class="collapse-item" href="#">Serviços</a>
      <a class="collapse-item" href="#">Balanço - DRE</a>
      <a class="collapse-item" href="#">Inventário</a>
    </div>
  </div>
</li>
   
<hr class="sidebar-divider my-0">


<!-- Menus Configurações -->
<li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Configurações" aria-expanded="true" aria-controls="collapsePages">
    <i class="fas fa-cogs"></i>
    <span>Configurações</span>
  </a>
  <div id="Configurações" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
      <h6 class="collapse-header">Opções</h6>
      <a class="collapse-item" href="#">Cadastro de Empresas</a>
      <a class="collapse-item" href="#">Regras Fiscais</a>
      <a class="collapse-item" href="#">Permissões</a>
      <a class="collapse-item" href="#">Usuários</a>
    </div>
  </div>
</li>


      <!-- Botão de abri e fechar menu -->
        <div class="text-center d-none d-md-inline">
          <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    </ul>
    <!-- Fim do Botão abir e fechar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Pesquisar..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <!-- Nav Item - Alerts -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <!-- Counter - Alerts -->
                <span class="badge badge-danger badge-counter">3+</span>
              </a>
              <!-- Dropdown - Alerts -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                  Alerts Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-primary">
                      <i class="fas fa-file-alt text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 12, 2019</div>
                    <span class="font-weight-bold">A new monthly report is ready to download!</span>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-success">
                      <i class="fas fa-donate text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 7, 2019</div>
                    $290.29 has been deposited into your account!
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-warning">
                      <i class="fas fa-exclamation-triangle text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 2, 2019</div>
                    Spending Alert: We've noticed unusually high spending for your account.
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
              </div>
            </li>

            <!-- Nav Item - Messages -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-envelope fa-fw"></i>
                <!-- Counter - Messages -->
                <span class="badge badge-danger badge-counter">7</span>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                <h6 class="dropdown-header">
                  Message Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/fn_BT9fwg_E/60x60" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div class="font-weight-bold">
                    <div class="text-truncate">Hi there! I am wondering if you can help me with a problem I've been having.</div>
                    <div class="small text-gray-500">Emily Fowler · 58m</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/AU4VPcFN4LE/60x60" alt="">
                    <div class="status-indicator"></div>
                  </div>
                  <div>
                    <div class="text-truncate">I have the photos that you ordered last month, how would you like them sent to you?</div>
                    <div class="small text-gray-500">Jae Chun · 1d</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/CS2uCrpNzJY/60x60" alt="">
                    <div class="status-indicator bg-warning"></div>
                  </div>
                  <div>
                    <div class="text-truncate">Last month's report looks great, I am very happy with the progress so far, keep up the good work!</div>
                    <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div>
                    <div class="text-truncate">Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...</div>
                    <div class="small text-gray-500">Chicken the Dog · 2w</div>
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
              </div>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Gesimiel Oliveira</span>
                <img class="img-profile rounded-circle" src="https://scontent-atl3-1.xx.fbcdn.net/v/t1.0-1/p200x200/26731566_2498890003668489_428465326761039252_n.png?_nc_cat=109&_nc_ht=scontent-atl3-1.xx&oh=5021324a72498035dc5f5795c267f274&oe=5CF09AC3">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Perfil
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Configurações
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Resgistro de Atividades
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Sair
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        