<?php

ob_start();

require __DIR__ . "/vendor/autoload.php";

/**
 * BOOTSTRAP
 */

use CoffeeCode\Router\Router;
use Source\Core\Session;

$session = new Session();
$route = new Router(url(), "@");
$route->namespace("Source\App");

/**
 * SITE ROUTES
 */

$route->group(null);
$route->get("/", "Site@home");

// NOTICIAS
$route->group("/noticias");
$route->get("/", "Site@newspaper");
$route->get("/{uri}", "Site@newspaperNews");
$route->post("/buscar", "Site@newspaperSearch");
//$route->get("/buscar/{search}/{page}", "Site@newspaperSearch");
$route->get("/buscar/{search}/{datePrevious}/{dateLater}/{category}/{page}", "Site@newspaperSearch");


// LICITAÇÃO
$route->group("licitacao");
$route->get("/", "Site@bidding");
$route->get("/p/{page}", "Site@bidding");
$route->get("/{modality}", "Site@biddingModality");
$route->get("/{modality}/p/{page}", "Site@biddingModality");
$route->post("/buscar", "Site@biddingSearch");
$route->get("/buscar/{process_number}/{search}/{datePrevious}/{dateLater}/{modality}/{status}/p/{page}", "Site@biddingSearch");


// GESTÃO
$route->group("gestao");
$route->get("/", "Site@management");
$route->get("/{secretary}", "Site@managementSecretary");

//DECRETOS
$route->group("decretos");
$route->get("/", "Site@decree");
$route->get("/p/{page}", "Site@decree");
$route->post("/buscar", "Site@decreeSearch");
$route->get("/buscar/{number_decree}/{search}/{type}/{datePrevious}/{dateLater}/p/{page}", "Site@decreeSearch");

//LEIS
$route->group("leis");
$route->get("/", "Site@laws");
$route->post("/buscar", "Site@lawSearch");
$route->get("/buscar/{law_number}/{search}/{datePrevious}/{dateLater}/p/{page}", "Site@lawSearch");


//PORTARIAS
$route->group("portarias");
$route->get("/", "Site@ordinance");
$route->post("/buscar", "Site@ordinanceSearch");
$route->get("/buscar/{number_ordinance}/{search}/{datePrevious}/{dateLater}/p/{page}", "Site@ordinanceSearch");



//MUNICIPIO
$route->group("municipio");
$route->get("/", "Site@county");
$route->get("/simbolos", "Site@countySymbol");
$route->get("/historia", "Site@countyHistory");
$route->get("/turismo", "Site@countyTurism");
$route->get("/turismo/{turism}", "Site@countyTurism");
$route->get("/cultura", "Site@countyCulture");
$route->get("/cultura/{patrimony}", "Site@countyCulture");


/**
 * ERROR ROUTES
 */
$route->group("/ops");
$route->get("/{errcode}", "Site@error");

/**
 * ROUTE
 */
$route->dispatch();

/**
 * ERROR REDIRECT
 */
if ($route->error()) {
//    var_dump("Deu erro: {$route->error()}");
    $route->redirect("/ops/{$route->error()}");
}

ob_end_flush();
