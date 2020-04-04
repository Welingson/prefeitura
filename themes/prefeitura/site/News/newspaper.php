<!--LISTA DE NOTICIAS-->
<?php $v->layout("_theme"); ?>

<nav class="bg-light" aria-label="breadcrumb">
    <ol class="container breadcrumb bg-light">
        <li class="breadcrumb-item"><a href="<?= url() ?>">Início</a></li>
        <li class="breadcrumb-item active" aria-current="page">Notícias</li>
    </ol>
</nav>

<section class="container">
    <div class="section-notice border-primary mb-5 mt-5">
        <div class="d-flex justify-content-between flex-wrap">
            <div class="d-flex col-sm-12 col-md-8 section-notices-list">
                <h1><i class="fas fa-newspaper mr-2"></i>Ultimas notícias</h1>
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
                <form name="search" action="<?= url("/noticias/buscar") ?>" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="form-group col-sm-12 col-md-6 col-lg-3">
                            <label for="term"><strong>Termos</strong></label>
                            <input name="terms" id="term" type="text" class="form-control" placeholder="Termo">
                        </div>
                        <div class="form-group col-sm-12 col-md-6 col-lg-3">
                            <label for="date-one"><strong> Data inicial</strong></label>
                            <input id="date-one" name="dateOne" type="date" class="form-control input-date">
                        </div>
                        <div class="form-group col-sm-12 col-md-6 col-lg-3">
                            <label for="date-two"><strong>Data final</strong></label>
                            <input id="date-two" name="dateTwo" type="date" class="form-control input-date">
                        </div>
                        <div class="form-group col-sm-12 col-md-6 col-lg-3">
                            <label for="category"><strong>Categoria</strong></label>
                            <select name="category" id="category" class="form-control">
                                <option selected value="">Selecione a Categoria</option>
                                <?php if (!empty($category) && isset($category)): ?>
                                    <?php foreach ($category as $c): ?>
                                        <option value="<?= $c->id; ?>"><?= $c->category ?></option>
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
    <!-- NOTICIAS -->

    <?php if (!empty($news) && isset($news)): ?>
        <div class="row">
            <?php foreach ($news as $post): ?>
                <?php $v->insert('News/newspaper-list', ["post" => $post]); ?>
            <?php endforeach; ?>
        </div>
    <?php else: ?>
        <div id="notfound-result" class="alert alert-primary" role="alert">
            <h3>A sua pesquisa não retornou resultados :/</h3>
            <p>Tente outros filtros</p>
            <a class="btn btn-primary" href="<?= url("/noticias");?>">... Ou volte as Notícias</a>
        </div>
    <?php endif; ?>
</section>