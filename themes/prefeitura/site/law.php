<!-- FILTROS -->

<?php $v->layout("_theme"); ?>
<nav class="bg-light" aria-label="breadcrumb">
    <ol class="container breadcrumb bg-light">
        <li class="breadcrumb-item"><a href="<?= url() ?>">Início</a></li>
        <li class="breadcrumb-item active" aria-current="page">Leis</li>
    </ol>
</nav>
<aside class="container">
    <div class="section-bidding border-primary mb-5 mt-5">
        <div class="d-flex justify-content-between flex-wrap">
            <div class="d-flex col-sm-12 col-md-8 section-bidding-list">
                <h1><i class="fas fa-gavel mr-2"></i>Leis</h1>
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
                <form action="" method="POST">
                    <div class="row">
                        <div class="form-group col-sm-12 col-md-6 col-lg-3">
                            <label for="number"><strong>Número</strong></label>
                            <input id="number" type="number" class="form-control" placeholder="Número">
                        </div>
                        <div class="form-group col-sm-12 col-md-6 col-lg-3">
                            <label for="term"><strong>Termo</strong></label>
                            <input id="term" type="text" class="form-control" placeholder="Termo">
                        </div>
                        <div class="form-group col-sm-12 col-md-6 col-lg-3">
                            <label for="date-one"><strong> Data inicial</strong></label>
                            <input id="date-one" type="date" class="form-control input-date">
                        </div>
                        <div class="form-group col-sm-12 col-md-6 col-lg-3">
                            <label for="date-two"><strong>Data final</strong></label>
                            <input id="date-two" type="date" class="form-control input-date">
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
<!-- LEIS MUNICIPAIS -->
<section class="container">

    <div class="col-12 my-4">
        <div class="card border border-primary">
            <div class="card-header bg-primary d-flex justify-content-between flex-wrap">
                <h5 class="text-white text-monospace bidding-process bidding-process">Lei
                    N° 01</h5>
                <span class="text-white font-weight-bold">09/03/2020</span>
            </div>
            <div class="card-body">
                <p class="text-justify"><strong>Lei: </strong>Lei talkdsdkfjdsf sdjfdjgh</p>
                <hr>
                <p><strong>Anexo do Decreto:</strong></p>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item list-group-item-action"><i
                            class="fas fa-file-pdf text-danger mr-2"></i>
                        <a href=""> - Publicado em </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- PAGINAÇÃO -->
<div class="d-flex justify-content-center mt-5">
    <nav aria-label="Page navigation example">
        <ul class="pagination">


        </ul>
    </nav>
</div>

