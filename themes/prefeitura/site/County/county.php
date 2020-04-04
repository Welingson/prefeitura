<?php $v->layout("_theme"); ?>
<nav class="bg-light" aria-label="breadcrumb">
    <ol class="container breadcrumb bg-light">
        <li class="breadcrumb-item"><a href="<?= url() ?>">Início</a></li>
        <li class="breadcrumb-item active" aria-current="page">Municipio</li>
    </ol>
</nav>

<div class="container mt-5">
    <h1 id="title-county" class="text-center text-primary font-weight-bold border-bottom border-primary">Conheça nosso
        Município</h1>
</div>

<?php $v->insert($view); ?>






