<?php $v->layout("_theme"); ?>
<nav class="bg-light" aria-label="breadcrumb">
    <ol class="container breadcrumb bg-light">
        <li class="breadcrumb-item"><a href="<?= url("/"); ?>">Início</a></li>
        <li class="breadcrumb-item active" aria-current="page">Gestão</li>
    </ol>
</nav>
<!-- CONTEUDO -->
<section class="container my-5">
    <aside>
        <div class="section-gestao-title border-primary mb-5 mt-5">
            <div class="d-flex justify-content-between flex-wrap">
                <div class="d-flex col-sm-12 col-md-8">
                    <h1><i class="fas fa-tasks"></i> Gestão - <span class="text-muted">2017/2020</span></h1>
                </div>
            </div>
        </div>
    </aside>

    <?php if (!empty($management) && isset($management)) : ?>
        <!-- GESTÃO -->
        <div class="row">
            <?php foreach ($management as $manager) : ?>
                <div class="col-sm-12 col-md-6 col-lg-4 section-gestao-card-list">
                    <img class="rounded-circle" src="https://picsum.photos/140/140?random=2" alt="">
                    <h2><?= $manager->findBySecretaryId()->secretary; ?></h2>
                    <p class="font-weight-bold"><i class="fas fa-user mr-2"></i><?= $manager->name; ?></p>
                    <p><i class="fas fa-phone-square mr-2"></i><?= $manager->contact($manager->id, "telephone")->telephone;?></p>
                    <a class="btn btn-primary" href="<?= url("/gestao/".strtolower($manager->findBySecretaryId()->secretary)."")?>" role="button">Mais informações <i class="fas fa-arrow-right"></i></a>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</section>