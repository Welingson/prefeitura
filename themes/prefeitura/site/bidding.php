<!-- FILTROS -->

<?php $v->layout("_theme"); ?>
<nav class="bg-light" aria-label="breadcrumb">
    <ol class="container breadcrumb bg-light">
        <li class="breadcrumb-item"><a href="<?= url() ?>">Início</a></li>
        <li class="breadcrumb-item active" aria-current="page">Licitação</li>
    </ol>
</nav>
<aside class="container">
    <div class="section-bidding border-primary mb-5 mt-5">
        <div class="d-flex justify-content-between flex-wrap">
            <div class="d-flex col-sm-12 col-md-8 section-bidding-list">
                <h1><i class="fas fa-gavel mr-2"></i>Licitações</h1>
            </div>
            <div class="col-sm-12 col-md-4 d-flex align-items-end justify-content-sm-start justify-content-md-end justify-content-lg-end">
                <p>
                    <a class="" data-toggle="collapse" href="#collapseExample" role="button"
                       aria-expanded="false" aria-controls="collapseExample">
                        <i class="fas fa-filter"></i>Filtros de busca
                    </a>
                </p>
            </div>
        </div>
        <div class="collapse" id="collapseExample">
            <div class="container mt-4">
                <form action="<?= url("/licitacao/buscar") ?>" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="form-group col-sm-12 col-md-6 col-lg-3">
                            <label for="number"><strong>Número</strong></label>
                            <input name="number" id="number" type="number" class="form-control" placeholder="">
                        </div>
                        <div class="form-group col-sm-12 col-md-6 col-lg-3">
                            <label for="term"><strong>Termos</strong></label>
                            <input name="terms" id="term" type="text" class="form-control" placeholder="Termo">
                        </div>
                        <div class="form-group col-sm-12 col-md-6 col-lg-3">
                            <label for="date-one"><strong> Data inicial</strong></label>
                            <input name="dateOne" id="date-one" type="date" class="form-control input-date">
                        </div>
                        <div class="form-group col-sm-12 col-md-6 col-lg-3">
                            <label for="date-two"><strong>Data final</strong></label>
                            <input name="dateTwo" id="date-two" type="date" class="form-control input-date">
                        </div>
                        <div class="form-group col-sm-12 col-md-6 col-lg-3">
                            <label for="category"><strong>Modalidade</strong></label>
                            <select name="category" id="category" class="form-control">
                                <option selected value="">Selecione a Modalidade</option>
                                <?php if (!empty($modality) && isset($modality)): ?>
                                    <?php foreach ($modality as $m): ?>
                                        <option value="<?= $m->id; ?>"><?= $m->category; ?></option>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </select>
                        </div>
                        <div class="form-group col-sm-12 col-md-6 col-lg-3">
                            <label for="status"><strong>Status</strong></label>
                            <select name="status" id="status" class="form-control">
                                <option selected value="">Selecione o Status</option>
                                <?php if (!empty($status) && isset($status)): ?>
                                    <?php foreach ($status as $s): ?>
                                        <option value="<?= $s->id; ?>"><?= $s->status; ?></option>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group d-flex align-items-end justify-content-md-between">
                        <p class="col-sm-6 col-md-6">
                            <a class="" data-toggle="collapse" href="#collapseExample" role="button"
                               aria-expanded="false" aria-controls="collapseExample">
                                <i class="fas fa-times"></i>Fechar
                            </a>
                        </p>
                        <button type="submit" class="btn btn-primary col-sm-6 col-md-6 col-lg-2"><i
                                    class="fas fa-search mr-2"></i>Pesquisar
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</aside>
<!-- LICITAÇÕES -->
<section class="container">
    <?php if (!empty($bidding) && isset($bidding)): ?>
        <?php foreach ($bidding as $process): ?>
            <div class="col-12 my-4">
                <div class="card border border-primary">
                    <div class="card-header bg-primary d-flex justify-content-between flex-wrap">
                        <h5 class="text-white text-monospace bidding-process bidding-process">Processo Licitatório
                            N° <?= $process->process_number; ?></h5>
                        <span class="text-white font-weight-bold"><?= date_fmt($process->created_at, "d/m/Y"); ?></span>
                    </div>
                    <div class="card-body">
                        <p>
                            <strong>Modalidade: </strong><?= ($process->modality(
                            ))->category . " N° " . $process->bidding_number; ?>
                        </p>
                        <hr>
                        <p class="text-justify"><strong>Objeto: </strong><?= $process->object; ?></p>
                        <hr>
                        <p><strong>Status: </strong><?= ($process->status())->status; ?></p>
                        <hr>
                        <p><strong>Anexos do Processo:</strong></p>
                        <ul class="list-group list-group-flush">
                            <?php $attachment = $process->findAttachment($process->id); ?>
                            <?php if (count($attachment) > 0): ?>
                                <?php foreach ($attachment as $file): ?>
                                    <li class="list-group-item list-group-item-action"><i
                                                class="fas fa-file-pdf text-danger mr-2"></i>
                                        <a href="<?= url(
                                            CONF_UPLOAD_DIR . "/" . $file->dir_attachment
                                        ) ?>"><?= $file->title; ?> - Publicado em
                                            <?= date_fmt($file->created_at); ?></a>
                                    </li>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    <?php else: ?>
        <div id="notfound-result" class="alert alert-primary" role="alert">
            <h3>A sua pesquisa não retornou resultados :/</h3>
            <p>Tente outros filtros</p>
            <a class="btn btn-primary" href="<?= url("/licitacao");?>">... Ou volte as Licitações</a>
        </div>
    <?php endif; ?>
</section>
<!-- PAGINAÇÃO -->
<?php if (!empty($paginator) && isset($paginator)): ?>
<div class="d-flex justify-content-center mt-5">
    <nav aria-label="Page navigation example">
        <ul class="pagination">
            <?= $paginator ?>
<!--                        <li class="page-item">-->
<!--                            <a class="page-link" href="#" aria-label="Previous">-->
<!--                                <span aria-hidden="true">&laquo;</span>-->
<!--                            </a>-->
<!--                        </li>-->
<!--                        <li class="page-item active"><a class="page-link" href="#">1</a></li>-->
<!--                        <li class="page-item"><a class="page-link" href="#">2</a></li>-->
<!--                        <li class="page-item"><a class="page-link" href="#">3</a></li>-->
<!--                        <li class="page-item">-->
<!--                            <a class="page-link" href="#" aria-label="Next">-->
<!--                                <span aria-hidden="true">&raquo;</span>-->
<!--                            </a>-->
<!--                        </li>-->
        </ul>
    </nav>
</div>
<?php endif; ?>