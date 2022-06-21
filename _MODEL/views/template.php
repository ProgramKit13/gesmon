<?php
if(empty($_SESSION['cLogin'])) {
    ?>
    <script type="text/javascript">window.location.href="./";</script>
    <?php
    exit;
}

?>

<html>
<head>
<title>Hotelaria</title>



<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/styles.min.css" />
<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/sidebar.min.css" />
<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/fonts/fontawesome-all.min.css" />


<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
                        <a href="#" id="logout">
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






<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/boostrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/logout.js"></script>
</body>

<?php $this->loadViewInTemplate($viewName, $viewData); ?>
</html>