<?php $render('sidebar', [
    'loggedUser' => $loggedUser,
    'loggedHotel' => $loggedHotel
    ]); ?>
<link rel="stylesheet" href="<?=$base?>/assets/css/reservas.css">
<script type="text/javascript" src="<?=$base?>/assets/js/reservas/script.js"></script>
<div class="container-fluid">
    <h1 class="text-dark mb-0 title-name"><?=ucfirst($loggedUser->nomeprop);?></h1><br/>
                <div class="row">
                    <div class="col">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h3 class="text-primary m-0 fw-bold">Reservas</h3>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>Editar</th>
                <th>Quarto</th>
                <th>Status</th>
                <th>Entrada</th>
                <th>Saída</th>
                <th>Cliente</th>
                <th>Pedidos</th>
                <th>Valor</th>
                <th>Info</th>
            </tr>
        </thead>
        <tbody style="padding: 0px;">
        
        <?php foreach($infoQuartos as $itemTabela):?>
            <?=$render('listaReserva', [
                'data' => $itemTabela
            ]) ;?>
        <?php endforeach ;?>

        </tbody>
    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php $render('footer'); ?>