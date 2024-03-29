<!DOCTYPE html>

<?php
 header("Cache-Control: no-cache, must-revalidate");
 header("Expires: Mon, 26 Jul 1997 05:00:00 GMT"); 
 require_once ("PHP\ValidaUrl.php");
 require_once ("PHP\bloqueios.php");
 ?>

<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> Food Controler</title>

    <!----------------------------- Custom fonts for this template-------------------------->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/foodControler.min.css" rel="stylesheet">

</head>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!------------------------------------------ Sidebar------------------------------------------------->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href= "index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3"> Food Controler </div>
            </a>
            <!-- Side Bar atualizada -->
            <hr class="sidebar-divider my-0">
            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            <!-- Dividir tarefas -->
            <hr class="sidebar-divider"></hr> 
            <!------------------------------------- Nav Item - estoque----------------------------------->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-shopping-cart"></i>
                    <span>Estoque</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Componentes - Estoque </h6>
                        <a class="collapse-item" href="listaProdutos.php"> Lista de produtos </a>
                        <a class="collapse-item" href="cadastroProdutos.php"> Cadastro de produtos </a>
                    </div>
                </div>
            <li class="nav-item">
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block align-content-center"> 
            </hr>
            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"> </button>
            </div>
            </ul>
        <!-- End of Sidebar -->

        <!------------------------------------------ barra superior ---------------------------------->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                      <i class="fa fa-bars"> </i>
                          </button>
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">                   
                        <!--------------------------------- botão de notificações - Alerts ------------------------------->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter"> +3 </span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header"> Notificações </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500"> 21 de Junho de 2019</div>
                                        <span class="font-weight-bold">O Estoque esta em estado Positivo !</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500"> 19 de Junho , 2019</div>
                                        Reposição de produtos no valor de R$ 200,00.
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">15 de Julho de 2019</div>
                                        Alerta: O estoque deve ser inventariado até o dia 30 deste mês.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#"> Mostrar todas as notificações </a>
                            </div>
                        </li>
                        <!---------------------------- Botão de drop( Informação do usuario) ------------------->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Usuario</span>
                                <i class="fas fa-user"></i>
                            </a>
                            <!------------------------------Botão de drop (informação do usuario) ------------------->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i> Perfil
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i> Configurações
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i> Sair
                                </a>
                            </div>
                            </div>
                        </li>
                    </ul>
                </nav>
                <!--------------------------Botão de drop (informação do usuario) ----------------------------------------->
                 <!------------------------------ Parte de logout --------------------------------------------------------->
                 <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Tem certeza que deseja sair ?</h5>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body"> Se selecionar "Sair", você encerrara sua sessão ao sistema, tem certeza ?</div>
                            <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                                <a class="btn btn-primary" href="login.php">Sair</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!----------------------------------Parte de logout---------------------------------------------------------->
                <!----------------------------------Barra superior - fim ---------------------------------------------------->
                <div class="container-fluid">
                    <div class="row">
                        <!-------------------------- Mini Graficos representativos  ----------------------------->
                        <!----------------------------------- 1 Grafico--------------------------------->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="font-weight-bold text-primary text-uppercase mb-1">Produtos em Estoque: </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"> 40.000 </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-cubes fa-2x text-gray-200"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!------------------------------ 2 Grafico ------------------------------->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="font-weight-bold text-success text-uppercase mb-1">Valor total em estoque: </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                R$ 400,000
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-------------------------------------- 3 grafico --------------------------------------->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="font-weight-bold text-info text-uppercase mb-1">Situação do Estoque: </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"> Positivo</div>
                                                </div>
                                                <div class="col">
                                                    <div class=>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-check fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!------------------------------------------ 4 grafico ------------------------->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="font-weight-bold text-warning text-uppercase mb-1" >Requisições Pendentes: </div>
                                            <div class="col-auto">
                                            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"> 10 </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!------------------------------------- Mini graficos representativos - Fim ------------------>
                    <div class="row">
                        <!----------------------------------- Primeiro grafico (chart) ---------------------------------------->
                        <div class="col-xl-8 col-lg-7">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary"> Estoque - Situação por periodo.</h6>
                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                            <div class="dropdown-header">Opções do grafico: </div>
                                            <a class="dropdown-item" href="#">Ordenação</a>
                                            <a class="dropdown-item" href="#">Dados</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Mais ações</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="chart-area">
                                        <canvas id="myAreaChart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!------------------------------Primeiro grafico - Fim ------------------------------------------------>
                        <!---------------------------- Segundo grafico(chart two) -------------------------------------------------->
                        <div class="col-xl-4 col-lg-5">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Situações </h6>
                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                            <div class="dropdown-header">Opções do Grafico:</div>
                                            <a class="dropdown-item" href="#">Ordenação</a>
                                            <a class="dropdown-item" href="#"> Dados </a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Mais ações</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-pie pt-4 pb-2">
                                        <canvas id="myPieChart"></canvas>
                                             </div>
                                            <div class="mt-4 text-center small">
                                        <span class="mr-2">
                                     <i class="fas fa-circle text-primary"></i> Produtos em estoque
                                </span>
                            <span class="mr-2">
                        <i class="fas fa-circle text-success"></i> Requisições - dia.
                    </span>
                <span class="mr-2">
                    <br>
                        <i class="fas fa-circle text-info"></i> Reposições - dia.
                            </span>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Content Row -->
                    <div class="row">
                        <!-- Content Column -->
                        <div class="col-lg-6 mb-4">
                        </div>
                        <!--------------------------------- Segundo grafico - Fim------------------------------------->
                        <!---------------------------------- Marca fim da pagina (Copyright) ------------------------->
                        <footer class="sticky-footer bg-white">
                                 <div class="container my-auto">
                                 <div class="copyright text-center my-auto">
                         <span>Copyright | &copy; Food Controler - 2019</span>
                        </div>
                        </div>
                 </footer>
                        <!---------------------------------- Marca fim da pagina (Copyright) ------------------------->
                    </div>
                </div>

                <!----------------------------------------------- Botão de acesso rapido (topo)--------------------------------->
                <a class="scroll-to-top rounded" href="#page-top">
                    <i class="fas fa-angle-up"></i>
                </a>
                <!----------------------------------------------- Botão de acesso rapido (topo) - Fim --------------------------------->
                <!-- Bootstrap core JavaScript-->
                <script src="vendor/jquery/jquery.min.js"></script>
                <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

                <!-- Core plugin JavaScript-->
                <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

                <!-- Custom scripts for all pages-->
                <script src="js/sb-admin-2.min.js"></script>

                <!-- Page level plugins -->
                <script src="vendor/chart.js/Chart.min.js"></script>

                <!-- Page level custom scripts -->
                <script src="js/demo/chart-area-demo.js"></script>
                <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>