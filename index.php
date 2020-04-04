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
$route->get("/buscar/{search}/{dateOne}/{dateTwo}/{category}/{page}", "Site@newspaperSearch");


// LICITAÇÃO
$route->group("licitacao");
$route->get("/", "Site@bidding");
$route->get("/p/{page}", "Site@bidding");
$route->get("/{modality}", "Site@biddingModality");
$route->get("/{modality}/p/{page}", "Site@biddingModality");
$route->post("/buscar", "Site@biddingSearch");
$route->get("/buscar/{process_number}/{search}/{dateOne}/{dateTwo}/{modality}/{status}/p/{page}", "Site@biddingSearch");


// GESTÃO
$route->group("gestao");
$route->get("/", "Site@management");
$route->get("/{secretary}", "Site@managementSecretary");

//DECRETOS
$route->group("decretos");
$route->get("/", "Site@decree");

//LEIS
$route->group("leis");
$route->get("/", "Site@laws");

//PORTARIAS
$route->group("portarias");
$route->get("/", "Site@ordinance");


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