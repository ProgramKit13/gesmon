<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <title>Untitled</title>
        <link rel="stylesheet" href="<?=$base?>/assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?=$base?>/assets/fonts/fontawesome-all.min.css">
        <link rel="stylesheet" href="<?=$base?>/assets/css/sidebar.css">
        <script src="<?=$base?>/assets/js/jquery.js"></script>
        <script src="<?=$base?>/assets/bootstrap/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="wrapper">
            <!-- Sidebar Holder -->
            <nav id="sidebar">
                <div class="sidebar-header">
                    <h1><img src="assets/img/icon_side.svg" /><span class="header_display">esmon</span></h1>
                </div>

                <ul class="list-unstyled components">
                   <li>
                        <a href="#">
                            <i class="far fa-calendar-alt"></i>
                            Agendamento
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fas fa-th-list"></i>
                            Cadastros
                        </a>
                    </li>
                    <li>
                        <a href="#">
                          <i class="fas fa-th-large"></i>
                            Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="#">
                           <i class="fas fa-calendar-check"></i>
                            Eventos
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fas fa-tools"></i>
                            Ferramentas
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fas fa-power-off"></i>
                            Sair
                        </a>
                    </li>
                </ul>
            </nav>

            <!-- Page Content Holder -->
            <div id="content">

                <nav class="navbar navbar-default">
                    <div class="container-fluid">

                        <div class="navbar-header">
                            <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                                <i class="fas fa-sliders-h"></i>
                                <span></span>
                            </button>
                        </div>
                    </div>
                </nav>
            </div>
        </div>


         <script type="text/javascript">
             $(document).ready(function () {
                 $('#sidebarCollapse').on('click', function () {
                     $('#sidebar').toggleClass('active');
                 });
             });
         </script>
         <i class="fas fa-sliders-h"></i>

        </body></html>