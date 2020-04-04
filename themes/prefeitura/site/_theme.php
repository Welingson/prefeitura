<!--TEMA PADRÃO-->
<!doctype html>
<html lang="pt-br">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?= $head; ?>
    <!-- Bootstrap CSS -->
    <link href="<?= theme("/assets/style.css") ?>" rel="stylesheet">

</head>
<body>
<header class="container-fluid ">
    <!-- LOGO -->
    <div class="blog-header">
        <div class="container d-flex  justify-content-between flex-wrap">
            <div id="" class="d-flex align-items-end justify-content-center flex-wrap flex-md-nowrap
                col-sm-12 col-md-6">
                <a href="<?= url("/"); ?>" class="">
                    <img src="<?= theme("/assets/images/logo-brazopolis.png"); ?>" alt="" id="logo-brazopolis">
                </a>
                <div class="mt-4 prefeitura-titulo">
                    <h4 class="text-white">Prefeitura Municipal</h4>
                    <h2 class="text-white font-weight-bold">Brazópolis - MG</h2>
                </div>
            </div>
            <div class="d-flex align-items-end col-sm-12 col-md-5 mt-5">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Pesquisar no site"
                           aria-describedby="basic-addon">
                    <div class="input-group-append">
                        <button class="btn bg-light search-on-site"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- MENU -->
    <nav class="menu navbar navbar-expand-lg navbar-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu-shortcut"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="menu-shortcut">
            <ul class="navbar-nav mr-auto ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link menu-item dropdown-toggle text-white" id="municipio" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false" href="#">Municipio</a>
                    <div class="dropdown-menu" aria-labelledby="municipio">
                        <a class="dropdown-item" href="<?= url("/municipio") ?>">Dados gerais</a>
                        <a class="dropdown-item" href="<?= url("/municipio/simbolos") ?>">Simbolos</a>
                        <a class="dropdown-item" href="<?= url("/municipio/historia") ?>">História</a>
                        <a class="dropdown-item" href="<?= url("/municipio/turismo") ?>">Turismo</a>
                        <a class="dropdown-item" href="<?= url("/municipio/cultura") ?>">Cultura</a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link menu-item dropdown-toggle text-white" id="servicos-publicos"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">Serviços Públicos</a>
                    <div class="dropdown-menu" aria-labelledby="servicos-publicos">
                        <a class="dropdown-item" href="#">Nota Fiscal</a>
                        <a class="dropdown-item" href="#">IPTU</a>
                        <a class="dropdown-item" href="#">Portal do Servidor</a>
                        <a class="dropdown-item" href="#">Iluminação Pública</a>
                        <a class="dropdown-item" href="#">Defesa Civil</a>
                        <a class="dropdown-item" href="#">Processo Seletivo</a>
                        <a class="dropdown-item" href="#">Editais de Eleições</a>
                        <a class="dropdown-item" href="#">Emissão de carteira de trabalho</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link menu-item dropdown-toggle text-white" id="gestao" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false" href="#">Gestão</a>
                    <div class="dropdown-menu" aria-labelledby="gestao">
                        <a class="dropdown-item" href="<?= url("/gestao/gabinete") ?>">Gabinete</a>
                        <a class="dropdown-item" href="<?= url("/gestao/governo") ?>">Governo</a>
                        <a class="dropdown-item" href="<?= url("/gestao/administracao") ?>">Administração</a>
                        <a class="dropdown-item" href="<?= url("/gestao/educacao") ?>">Educação</a>
                        <a class="dropdown-item" href="<?= url("/gestao/assuntos-juridicos") ?>">Assuntos Jurídicos</a>
                        <a class="dropdown-item" href="<?= url("/gestao/saude") ?>">Saúde</a>
                        <a class="dropdown-item" href="<?= url("/gestao/social") ?>">Social</a>
                        <a class="dropdown-item" href="<?= url("/gestao/agricultura") ?>">Agricultura</a>
                        <a class="dropdown-item" href="<?= url("/gestao/fazenda-e-planejamento") ?>">Fazenda e
                            Planejamento</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link menu-item dropdown-toggle text-white" id="licitacao" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false" href="<?= url("/licitacao"); ?>">Licitação</a>
                    <div class="dropdown-menu" aria-labelledby="licitacao">
                        <a class="dropdown-item" href="<?= url("/licitacao"); ?>">Todas</a>
                        <a class="dropdown-item" href="<?= url("/licitacao/pregao-presencial"); ?>">Pregão
                            Presencial</a>
                        <a class="dropdown-item" href="<?= url("/licitacao/dispensa"); ?>">Dispensa</a>
                        <a class="dropdown-item" href="<?= url("/licitacao/inexigibilidade"); ?>">Inexigibilidade</a>
                        <a class="dropdown-item" href="<?= url("/licitacao/carta-convite"); ?>">Carta Convite</a>
                        <a class="dropdown-item" href="<?= url("/licitacao/tomada-de-preco"); ?>">Tomada de Preço</a>
                        <a class="dropdown-item" href="<?= url("/licitacao/chamada-publica"); ?>">Chamada Pública</a>
                        <a class="dropdown-item" href="<?= url("/licitacao/adesao-ata-registro-de-preco"); ?>">Adesão
                            Ata Registro de Preço</a>
                        <a class="dropdown-item" href="<?= url("/licitacao/concorrencia"); ?>">Concorrência</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link menu-item dropdown-toggle text-white" id="transparencia" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false" href="#">Transparência
                    </a>
                    <div class="dropdown-menu" aria-labelledby="transparencia">
                        <a class="dropdown-item" href="#">Municipal</a>
                        <a class="dropdown-item" href="#">Estadual</a>
                        <a class="dropdown-item" href="#">E-SIC</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link menu-item dropdown-toggle text-white" id="conselhos-municipais"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">Conselhos Municipais
                    </a>
                    <div class="dropdown-menu" aria-labelledby="conselhos-municipais">
                        <a class="dropdown-item" href="#">Municipal</a>
                        <a class="dropdown-item" href="#">Estadual</a>
                        <a class="dropdown-item" href="#">E-SIC</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link menu-item dropdown-toggle text-white" id="legislacao-municipal"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">Legislação Municipal
                    </a>
                    <div class="dropdown-menu" aria-labelledby="legislacao-municipal">
                        <!-- <a class="dropdown-item" href="#">Leis/Decretos</a> -->
                        <a class="dropdown-item" href="<?= url("/decretos") ?>">Decretos</a>
                        <a class="dropdown-item" href="<?= url("/leis") ?>">Leis</a>
                        <a class="dropdown-item" href="<?= url("/portarias") ?>">Portarias</a>
                        <a class="dropdown-item" href="<?= url("/") ?>">Manual Técnico</a>
                        <a class="dropdown-item" href="#">Vigilância Sanitária</a>
                        <a class="dropdown-item" href="#">Lei Orgânica</a>
                        <a class="dropdown-item" href="#">Estatuto do Servidor</a>
                        <a class="dropdown-item" href="#">Código Tributário</a>
                        <a class="dropdown-item" href="#">Código de Postura</a>
                        <a class="dropdown-item" href="#">Código Sanitário</a>
                        <a class="dropdown-item" href="#">Leis de Utilizaçaõ do Solo</a>
                    </div>
                </li>
                <li class="nav-item menu-item">
                    <a class="nav-link text-white" href="#">Marco Regulatório</a>
                </li>
            </ul>
        </div>
    </nav>
</header>
<!--   CONTEUDO-->
<main class="">
    <?= $v->section("content"); ?>

</main>
<div class="d-flex justify-content-center align-items-center flex-column" id="spinner-load">
    <div class="spinner-border text-primary" role="status">
        <span class="sr-only">Loading...</span>
    </div>
    <p>Carregando</p>
</div>
<!--FIM CONTEUDO-->
<!-- FIM GESTÃO -->
<!-- FOOTER - RODAPÉ -->
<footer class="mt-auto px-5 py-5">
    <div class="container-fluid">
        <div class="d-flex flex-wrap justify-content-around align-items-base mb-5">
            <div id="logo-brazopolis-cabecalho"
                 class="d-flex align-items-end justify-content-center flex-wrap flex-md-nowrap">
                <a href="<?= url("/"); ?>" class="">
                    <img src="<?= theme("/assets/images/logo-brazopolis.png"); ?>" alt="" id="logo-brazopolis">
                </a>
                <div class="mt-4 prefeitura-titulo">
                    <h4 class="text-white">Prefeitura Municipal</h4>
                    <h2 class="text-white font-weight-bold">Brazópolis - MG</h2>
                </div>
            </div>
            <div class="mt-5 prefeitura-rodape">
                <h4 class="text-white lead">Horário de funcionamento: Segunda à Sexta das: 8h às 11:30 e 13h às
                    16:30</h4>
                <p class="text-white lead">Telefone: (35) 3641-1373 - CEP: 37530-000 - Rua Dona Ana Chaves, 218</p>
                <a class="lead" href="mailto:contato@brazopolis.mg.gov.br"> Ouvidoria: contato@brazopolis.mg.gov.br</a>
            </div>
        </div>
        <div class="row d-flex flex-wrap align-items-base justify-content-center">
            <div class="col-12 col-md-3 col-lg-3" id="nav-list-footer">
                <h4 class="border-bottom pb-2 text-white font-weight-bold">Navegue</h4>
                <ul class="nav-list">
                    <li><a href="#menu-shortcut">Menu</a></li>
                    <li><a href="<?= url("/noticias") ?>">Noticias</a></li>
                    <li><a href="<?= url("/licitacao") ?>">Licitação</a></li>
                    <li><a href="<?= url("/leis") ?>">Leis Municipais</a></li>
                    <li><a href="<?= url("/decretos") ?>">Decretos</a></li>
                    <li><a href="<?= url("/portarias") ?>">Portarias</a></li>
                </ul>
            </div>
            <div class="col-12 col-md-3 col-lg-3" id="nav-list-social">
                <h4 class="border-bottom pb-2 text-white font-weight-bold">Siga nas redes sociais</h4>
                <ul class="nav-list">
                    <li><a href="#" class=""><i class="fab fa-facebook-f mr-2"></i>Facebook</a></li>
                    <li><a href="#" class=""><i class="fab fa-instagram mr-2"></i>Instagram</a></li>
                </ul>
            </div>
            <div class="col-12 col-md-5 col-lg-5">
                <h4 class="border-bottom pb-2 text-white font-weight-bold">Localização</h4>
                <iframe id="google-maps-home"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3686.8724963715495!2d-45.621947385232474!3d-22.471425228129636!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cb822274c6f535%3A0x9e0fa2cd2ba7d055!2sPrefeitura%20Municipal%20de%20Braz%C3%B3polis!5e0!3m2!1spt-BR!2sbr!4v1585142490600!5m2!1spt-BR!2sbr"
                        frameborder="0" style="border:0;" allowfullscreen="">

                </iframe>
            </div>
        </div>
    </div>
</footer>

<!-- FIM RODAPÉ -->

<script src="<?= theme("/assets/scripts.js") ?>"></script>
</body>

</html>