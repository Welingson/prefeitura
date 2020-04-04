<div class="d-flex flex-wrap justify-content-center align-items-center">
    <a href="<?= url("/municipio"); ?>" class="m-2"><i class="fas fa-info-circle mr-2"></i>Dados Gerais</a>
    <a href="<?= url("/municipio/simbolos"); ?>" class="m-2"><i class="far fa-flag mr-2"></i>Símbolos</a>
    <a href="<?= url("/municipio/historia"); ?>" class="m-2"><i class="fas fa-home mr-2"></i>História</a>
    <a href="<?= url("/municipio/turismo"); ?>" class="m-2"><i class="fas fa-tree mr-2"></i>Turismo</a>
    <a href="<?= url("/municipio/cultura"); ?>" class="m-2 btn btn-primary"><i class="fas fa-praying-hands mr-2"></i>Cultura</a>
</div>

<section class="container my-5">

    <?php if (!empty($patrimony) && isset($patrimony)): ?>
        <?php $v->insert($patrimony); ?>
        <?php $v->insert("County/county-culture-list"); ?>
    <?php else: ?>
        <?php $v->insert("County/county-culture-list"); ?>
    <div class="d-flex flex-wrap justify-content-around" id="lista-patrimonio">
        <ul class="list-group my-4">
            <li class="list-group-item active"><h4 class="font-weight-bold m-0">Patrimônios Históricos Tombados</h4>
            </li>
            <li class="list-group-item">Igreja Matriz de São Caetano de Thienne e Sant’Ana</li>
            <li class="list-group-item">Santuário de Nossa Senhora Aparecida</li>
            <li class="list-group-item">Castelinho</li>
            <li class="list-group-item">Escola Municipal Coronel Francisco Braz</li>
            <li class="list-group-item">Ponte de Ferro</li>
            <li class="list-group-item">Calçamento de Pedra</li>
            <li class="list-group-item">Imagem de São Caetano</li>
            <li class="list-group-item">Imóvel residencial situado à Rua Capitão Manoel Gomes, nº 20</li>
        </ul>
        <ul class="list-group my-4">
            <li class="list-group-item active"><h4 class="font-weight-bold m-0">Patrimônios Históricos Imateriais
                    Tombados</h4></li>
            <li class="list-group-item">Coral Vozes de Euterpe</li>
            <li class="list-group-item">Encenação da Semana Santa – Teatro Amador Brazopolense</li>
        </ul>
    </div>

    <?php endif; ?>

</section>
