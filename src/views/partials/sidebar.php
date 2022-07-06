<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <title>Untitled</title>
        <link rel="stylesheet" href="<?=$base?>/assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?=$base?>/assets/fonts/fontawesome-all.min.css">
        <link rel="stylesheet" href="<?=$base?>/assets/css/sidebar.css">
    
        <script type="text/javascript" src="<?=$base?>/assets/js/jquery.js"></script>
        <script type="text/javascript" src="<?=$base?>/assets/js/cadastro/mask/dist/jquery.mask.js"></script>

        
    </head>
    

<body id="page-top"><div id="wrapper">
    <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion p-0">
        <div class="container-fluid d-flex flex-column p-0"><a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                <div class="sidebar-brand-text mx-3"><span><img src="<?=$base?>/assets/img/icon_side.svg" /></span></div>
            </a>
            <hr class="sidebar-divider my-0" />
            <ul id="accordionSidebar" class="navbar-nav text-light font-span">


                <li class="nav-item"><a class="nav-link" href="<?=$base?>/painel"><i class="fas fa-table"></i><span>Painel</span></a></li>
                <li class="nav-item"><a class="nav-link" href="<?=$base?>/reservas"><i class="far fa-list-alt"></i><span>Reservas</span></a></li>
                <li class="nav-item"><a class="nav-link" href="<?=$base?>/cadastros"><i class="far fa-plus-square"></i><span>Cadastro</span></a></li>
                <li class="nav-item"><a class="nav-link" href="<?=$base?>/historico"><i class="fas fa-history"></i><span>Histórico</span></a>
                <li class="nav-item"><a class="nav-link" href="<?=$base?>/calendario"><i class="fas fa-calendar-week"></i><span>Calendario</span></a>
                <li class="nav-item"><a class="nav-link" href="<?=$base?>/ferramentas"><i class="fas fa-tools"></i><span>Ferramentas</span></a>
                <li class="nav-item"><a class="nav-link" href="<?=$base?>/sair"><i class="fas fa-user-circle"></i><span>Sair</span></a>
            </ul>
            <div class="text-center d-none d-md-inline"><button id="sidebarToggle" class="btn rounded-circle border-0" type="button"></button></div>
        </div>
    </nav>


    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
            <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                <div class="container-fluid">
                    <button id="sidebarToggleTop" class="btn d-md-none rounded-circle me-3" type="button">
                        <i class="fas fa-bars fas-color"></i>
                    </button>
                    <form class="d-none d-sm-inline-block me-auto ms-md-3 my-2 my-md-0 mw-100 navbar-search" method="GET" action="<?=$base;?>/pesquisa">
                        <div class="input-group">
                            <input class="bg-light form-control border-0 small" name="s" type="text" placeholder="Procurar por ..." /><button class="btn btn-warning py-0" type="button">
                            <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </form>
                    <ul class="navbar-nav flex-nowrap ms-auto">
                        <li class="nav-item dropdown d-sm-none no-arrow">
                            <a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#">
                                <i class="fas fa-search"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end p-3 animated--grow-in" aria-labelledby="searchDropdown">
                                <form class="me-auto navbar-search w-100" method="GET" action="<?=$base;?>/pesquisa">
                                    <div class="input-group">
                                        <input class="bg-light form-control border-0 small" type="text" name="s" placeholder="Procurar por ..." />
                                        <div class="input-group-append">
                                            <button class="btn btn-info py-0" type="button"><i class="fas fa-search">
                                                </i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>
                        <li class="nav-item dropdown no-arrow mx-1">
                            <div class="nav-item dropdown no-arrow">
                                <a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><span class="badge bg-danger badge-counter"></span><i class="fas fa-bell fa-fw"></i></a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-list animated--grow-in">
                                    <h6 class="dropdown-header">Alertas</h6>
                                    
                                  <a class="dropdown-item text-center small text-gray-500" href="<?=$base?>/alertas">Mostras todos</a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown no-arrow mx-1">
                            <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><span class="badge bg-danger badge-counter"></span><i class="fas fa-envelope fa-fw"></i></a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-list animated--grow-in">
                                    <h6 class="dropdown-header">Informativos</h6>
                                    
                                  <a class="dropdown-item text-center small text-gray-500" href="<?=$base?>/informativos">Mostrar todos</a>
                                </div>
                            </div>
                            <div class="shadow dropdown-list dropdown-menu dropdown-menu-end" aria-labelledby="alertsDropdown"></div>
                        </li>
                        <div class="d-none d-sm-block topbar-divider"></div>
                        <li class="nav-item dropdown no-arrow">
                            <div class="nav-item dropdown no-arrow">
                                <a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#">
                                    <span class="d-none d-lg-inline me-2 text-gray-600 small"><?=$loggedUser->nome;?></span></a>
                                <div class="dropdown-menu shadow dropdown-menu-end animated--grow-in">
                                    <a class="dropdown-item" href="<?=$base?>/perfil"><i class="fas fa-user fa-sm fa-fw me-2 text-gray-400"></i> Perfil</a>
                                    <a class="dropdown-item" href="<?=$base?>/configuracao"><i class="fas fa-cogs fa-sm fa-fw me-2 text-gray-400"></i> Configuração</a>
                                    <a class="dropdown-item" href="<?=$base?>/registros"><i class="fas fa-list fa-sm fa-fw me-2 text-gray-400"></i> Registros</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="<?=$base?>/sair"><i class="fas fa-sign-out-alt fa-sm fa-fw me-2 text-gray-400"></i> Sair</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
