<!--GESTÃO PREVIEW-->
<?php if (!empty($secretary) && isset($secretary)): ?>
<section class="bg-light pt-4 pb-5">
    <div class="container">
        <h3 class="text-center font-weight-bold border-bottom border-primary" id="title-gestao">Gestão</h3>
        <h4 class="text-center text-muted pb-2">2017 - 2020</h4>
        <div class="secao-gestao" id="secao-gestao-home">
            <?php foreach ($secretary as $s): ?>
            <div class="card-gestao">
                <div class="card-gestao-image">
                    <img src="https://picsum.photos/190/170?random=1" alt="">
                </div>
                <div class="card-gestao-info">
                    <h6><?= $s->secretary;?></h6>
                    <p><i class="fas fa-user mr-2"></i><?= (new \Source\Models\Management())->findByManager($s->id, "manager")->name;?></p>
                    <a href="<?= url("/gestao/".strtolower($s->secretary));?>" class="btn btn-primary">Mais informações <i class="fas fa-arrow-alt-circle-right"></i>
                    </a>
                </div>
            </div>
            <?php endforeach; ?>
           
            <div class="d-flex align-items-center" id="see-more">
               <a href="<?=url("/gestao");?>" class="rounded-circle"><i class="fas fa-arrow-alt-circle-right"></i></a>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>