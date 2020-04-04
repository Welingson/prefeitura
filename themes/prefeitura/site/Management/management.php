<?php $v->layout("_theme"); ?>

<?php if (!empty($secretary) && isset($secretary)): ?>
    <nav class="bg-light" aria-label="breadcrumb">
        <ol class="container breadcrumb bg-light">
            <li class="breadcrumb-item"><a href="<?= url("/"); ?>">Início</a></li>
            <li class="breadcrumb-item"><a href="<?= url("/gestao"); ?>">Gestão</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?= $secretary->secretary ?></li>
        </ol>
    </nav>

    <!-- TITULO -->
    <aside class="container">
        <div class="section-gestao-title border-primary mb-5 mt-5">
            <div class="d-flex justify-content-between flex-wrap">
                <div class="d-flex col-sm-12 col-md-8">
                    <h1><i class="fas fa-tasks mr-2"></i><?= $secretary->secretary ?> - <span class="text-muted">2017/2020</span>
                    </h1>
                </div>
            </div>
        </div>
    </aside>
    <!-- GESTAO - ITEM -->
    <?php if (!empty($manager) && isset($manager)) : ?>
        <section class="container">
            <section class="my-5 d-flex justify-content-center">
                <div class="card" id="card-manager">
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-4" style="padding: unset">
                            <img src="https://picsum.photos/500/500?random=4" class="card-img" alt="...">
                        </div>
                        <div class="col-md-8" style="padding: unset">
                            <div class="card-body">
                                <h5 class="card-title"><?= $manager->title ?>: <?= $manager->name; ?></h5>
                                <?php if (!empty($contactManager) && isset($contactManager)): ?>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">
                                            <i class="fas fa-phone-square mr-2"></i>
                                            <?= $contactManager->telephone; ?>
                                        </li>
                                        <li class="list-group-item">
                                            <i class="fas fa-envelope mr-2"></i>
                                            <?= $contactManager->email; ?>
                                        </li>
                                    </ul>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <?php if (!empty($employee) && isset($employee)): ?>
                <section class="row my-5">
                    <?php foreach ($employee as $user): ?>
                        <div class="col-sm-12 col-md-6 col-lg-4 section-gestao-card-list">
                            <img class="rounded-circle" src="https://picsum.photos/140/140?random=2" alt="">
                            <h2><?= $user->title; ?></h2>
                            <p class="font-weight-bold"><i class="fas fa-user mr-2"></i><?= $user->name; ?></p>
                            <?php $telephone = (new \Source\Models\Contact())->findByManagerId(
                                $user->id,
                                "telephone"
                            );
                            $email = (new \Source\Models\Contact())->findByManagerId(
                                $user->id,
                                "email"
                            );
                            ?>
                            <?php if ($telephone): ?>
                                <div>
                                    <i class="fas fa-phone-square"></i>
                                    <span class="ml-1"><?= $telephone->telephone ?></span>
                                </div>
                            <?php endif; ?>
                            <?php if ($email): ?>
                                <i class="fas fa-phone-square"></i>
                                <span class="ml-1"><?= $email->email ?></span>
                            <?php endif; ?>
                        </div>
                    <?php endforeach; ?>
                </section>
            <?php endif; ?>
        </section>
    <?php endif; ?>
<?php endif; ?>