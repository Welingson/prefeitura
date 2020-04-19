<!-- FILTROS -->

<?php $v->layout("_theme"); ?>
<nav class="bg-light" aria-label="breadcrumb">
    <ol class="container breadcrumb bg-light">
        <li class="breadcrumb-item"><a href="<?= url() ?>">Início</a></li>
        <li class="breadcrumb-item active" aria-current="page">Decretos</li>
    </ol>
</nav>
<aside class="container">
    <div class="section-bidding border-primary mb-5 mt-5">
        <div class="d-flex justify-content-between flex-wrap">
            <div class="d-flex col-sm-12 col-md-8 section-bidding-list">
                <h1><i class="fas fa-gavel mr-2"></i>Decretos</h1>
            </div>
            <div class="col-sm-12 col-md-4 d-flex align-items-end justify-content-sm-start justify-content-md-end justify-content-lg-end">
                <p>
                    <a class="" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                        <i class="fas fa-filter"></i>Filtros de busca
                    </a>
                </p>
            </div>
        </div>
        <div class="collapse" id="collapseExample">
            <div class="container mt-4">
                <form action="<?= url('/decretos/buscar') ?>" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="form-group col-sm-12 col-md-6 col-lg-3">
                            <label for="number"><strong>Número</strong></label>
                            <input id="number" name="number" type="number" class="form-control" placeholder="Número">
                        </div>
                        <div class="form-group col-sm-12 col-md-6 col-lg-3">
                            <label for="term"><strong>Termo</strong></label>
                            <input id="term" name="terms" type="text" class="form-control" placeholder="Termo">
                        </div>
                        <div class="form-group col-sm-12 col-md-6 col-lg-3">
                            <label for="type"><strong>Tipo</strong></label>
                            <select name="type" id="type" class="form-control">
                                <option selected value="">Selecione o tipo</option>
                                <?php if (!empty($documentType) && isset($documentType)) : ?>
                                    <?php foreach ($documentType as $t) : ?>
                                        <option value="<?= $t->id; ?>"><?= $t->type; ?></option>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </select>
                        </div>

                        <div class="form-group col-sm-12 col-md-6 col-lg-3">
                            <label for="datePrevious"><strong>Data de pub. inicial</strong></label>
                            <input id="datePrevious" name="datePrevious" type="date" class="form-control input-date">
                        </div>
                        <div class="form-group col-sm-12 col-md-6 col-lg-3">
                            <label for="dateLater"><strong>Data de pub. final</strong></label>
                            <input id="dateLater" name="dateLater" type="date" class="form-control input-date">
                        </div>
                    </div>
                    <div class="form-group d-flex align-items-end justify-content-md-between">
                        <p class="col-sm-6 col-md-6">
                            <a class="" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                <i class="fas fa-times"></i>Fechar
                            </a>
                        </p>
                        <button type="submit" class="btn btn-primary col-sm-6 col-md-6 col-lg-2"><i class="fas fa-search mr-2"></i>Pesquisar
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</aside>
<!-- DECRETOS -->
<section class="container">
    <?php if (!empty($decree) && isset($decree)) : ?>
        <?php foreach ($decree as $item) : ?>
            <div class="col-12 my-4">
                <div class="card border border-primary">
                    <div class="card-header bg-primary d-flex justify-content-between flex-wrap">
                        <h5 class="text-white text-monospace bidding-process bidding-process">
                            Decreto <?= $item->type($item->type)->type; ?>
                            N° <?= $item->number_decree; ?>
                        </h5>
                       
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><strong class="mr-2">Decreto:</strong><?= $item->decree; ?></li>
                            <li class="list-group-item"><strong class="mr-2">Publicado em:</strong><?= date_fmt($item->date_pub, "d/m/Y"); ?></li>
                            <li class="list-group-item">
                                <strong>Anexos:</strong>
                                <ul>
                                    <li>
                                        <a href="">
                                            <i class="fas fa-file-pdf text-danger mr-2"></i>
                                            Decreto <?= $item->type($item->type)->type; ?> N° <?= $item->number_decree; ?>

                                            - Publicado em
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    <?php else : ?>
        <?php $v->insert("searchNotFound"); ?>
    <?php endif; ?>
</section>
<!-- PAGINAÇÃO -->
<?php if (!empty($paginator) && isset($paginator)) : ?>
    <?= $paginator ?>
<?php endif; ?>