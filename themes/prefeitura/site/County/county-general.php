<div class="d-flex flex-wrap justify-content-center align-items-center">
    <a href="" class="m-2 btn btn-primary"><i class="fas fa-info-circle mr-2"></i>Dados Gerais</a>
    <a href="<?= url("/municipio/simbolos"); ?>" class="m-2"><i class="far fa-flag mr-2"></i>Símbolos</a>
    <a href="<?= url("/municipio/historia"); ?>" class="m-2"><i class="fas fa-home mr-2"></i>História</a>
    <a href="<?= url("/municipio/turismo"); ?>" class="m-2"><i class="fas fa-tree mr-2"></i>Turismo</a>
    <a href="<?= url("/municipio/cultura"); ?>" class="m-2"><i class="fas fa-praying-hands mr-2"></i>Cultura</a>
</div>
<section class="container my-5">
    <div class="secao-gestao">
        <?php if (!empty($manager) && isset($manager)): ?>
            <div class="card-gestao">
                <div class="card-gestao-image">
                    <img src="https://picsum.photos/190/170?random=1" alt="">
                </div>
                <div class="card-gestao-info">
                    <h6><?= $manager->title ?></h6>
                    <p><i class="fas fa-user mr-2"></i><?= $manager->name ?></p>
                    <a href="mailto:<?= $emailManager->email;?>"><i class="fas fa-envelope mr-2"></i>E-mail</a>

                </div>
            </div>
        <?php endif; ?>
        <?php if (!empty($employee) && isset($employee)): ?>
            <div class="card-gestao">
                <div class="card-gestao-image">
                    <img src="https://picsum.photos/190/170?random=1" alt="">
                </div>
                <div class="card-gestao-info">
                    <h6><?= $employee->title ?></h6>
                    <p><i class="fas fa-user mr-2"></i><?= $employee->name ?></p>
                    <a href="mailto:<?= $emailEmployee->email;?>"><i class="fas fa-envelope mr-2"></i>E-mail</a>
                </div>
            </div>
        <?php endif; ?>
    </div>

    <div class="my-5">
        <h4 class="text-center"><i>Características Geográficas</i></h4>
        <table class="table table-hover table-responsive-sm">
            <thead>
            <tr>
                <th>Área</th>
                <th>População estimada</th>
                <th>Densidade</th>
                <th>Altitude</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Área 367,688 <sup>2</sup></td>
                <td>(IBGE 2017) 14.889 hab</td>
                <td>39,87 hab/Km <sup>2</sup></td>
                <td>850 m</td>
            </tr>
        </table>
    </div>
    <div class="my-5 border border-primary d-flex justify-content-center" id="google-maps-municipio">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3686.8592919109533!2d-45.621665285411076!3d-22.471921328146646!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cb82220b376a75%3A0x3916fabac406c10e!2sCart%C3%B3rio%20de%20Reg%20de%20Im%C3%B3veis%20de%20Brazopolis!5e0!3m2!1spt-BR!2sbr!4v1582748711764!5m2!1spt-BR!2sbr"
                frameborder="0" width="100%" height="100%" style="border:0;" allowfullscreen="">
        </iframe>
    </div>
</section>