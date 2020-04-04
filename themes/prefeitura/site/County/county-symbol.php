<div class="d-flex flex-wrap justify-content-center align-items-center">
    <a href="<?= url("/municipio"); ?>" class="m-2"><i class="fas fa-info-circle mr-2"></i>Dados Gerais</a>
    <a href="" class="m-2 btn btn-primary"><i class="far fa-flag mr-2"></i>Símbolos</a>
    <a href="<?= url("/municipio/historia"); ?>" class="m-2"><i class="fas fa-home mr-2"></i>História</a>
    <a href="<?= url("/municipio/turismo"); ?>" class="m-2"><i class="fas fa-tree mr-2"></i>Turismo</a>
    <a href="<?= url("/municipio/cultura"); ?>" class="m-2"><i class="fas fa-praying-hands mr-2"></i>Cultura</a>
</div>

<section class="container my-5">

    <article id="hino-brazopolis" class="mb-5 my-5">
        <div class="border-bottom d-flex flex-wrap justify-content-between align-items-center py-2">
            <h2 class="font-italic font-weight-bold">Hino de Brazópolis
            </h2>
            <span class="btn btn-primary font-weight-bold" onclick="window.print()"><i class="fas fa-print mr-2"></i>Imprimir</span>
        </div>
        <div id="hino" class="my-5">
            <div class="text-center">
                <p class="lead font-italic font-weight-bold">
                    Todos cantam sua terra <br>
                    Vamos pois cantar também.
                </p>
                <p class="lead font-italic font-weight-bold">
                    A nossa que bem parece <br>
                    O presépio de Belém.</p>
                <p class="lead font-weight-bold font-italic">
                    Belas ruas, bem traçadas, <br>
                    Em cada praça, um jardim, <br>
                    Ao lado a mata frondosa, <br>
                    Em torno serras sem fim.</p>
                <p class="lead font-weight-bold font-italic">Refrão</p>
                <p class="lead font-weight-bold font-italic">
                    Brasópolis,terra querida, <br>
                    Cidadizinha de luz. <br>
                    Brasópolis, miniatura <br>
                    Da Terra de Santa Cruz.
                </p>
            </div>
            <div class="text-center">
                <p class="lead font-weight-bold font-italic">
                    Acolá, bem no caminho, <br>
                    Desta cidade querida <br>
                    Fica situada a igreja, <br>
                    Da Senhora Aparecida.
                </p>
                <p class="lead font-weight-bold font-italic">
                    Como é belo ver na serra <br>
                    os albores da manhã. <br>
                    O sol parece beijar, <br>
                    O Cruzeiro do Can-Can.
                </p>
            </div>
        </div>
    </article>

    <div class="d-flex justify-content-center flex-wrap" id="symbol-image">
        <div class="my-3">
            <p class="notice-category">Bandeira de Brazópolis</p>
            <img class="img-responsive rounded" src="https://picsum.photos/450/250?random=3" alt="">
        </div>
        <div class="my-3">
            <p class="notice-category">Brasão de Brazópolis</p>
            <img class="img-responsive rounded" src="https://picsum.photos/450/250?random=3" alt="">
        </div>
    </div>
</section>

