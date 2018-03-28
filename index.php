<?php
require_once "includes/connection.php";
include "includes/header.php";
//require_once "includes/contentArray.php";
/**
 * @ref http://php.net/manual/fr/function.http-response-code.php
 */
// gestion de la page par defaut (pas de param page= dans l'url
define('APP_DEFAULT_PAGE', 'el-miedo-de-los-teletubbies');
// la page par defaut n'existe pas, horreur, malheur
if (!isset($content[APP_DEFAULT_PAGE])) {
    die('omfg');
}
// gestion de la page appelee (param page=)
$pageKey = $_GET['page'] ?? APP_DEFAULT_PAGE;
if (!isset($content[$_GET['page']])) {
    // recuperation de la page par defaut
    $page = &$content[APP_DEFAULT_PAGE];
} else {
    // recuperation de la page demandee
    $page = &$content[$pageKey] ?? null;
}
// gestion de l'affichage de la page par defaut si la page appelee n'existe pas (avec le status 404 http)
if(null === $page){
    // renvoi du code http 404 si page demande inexistante
    http_response_code(404);
    $page = &$content[$pageKey] ?? null;
}
// factorisied the content display
displayPage($page);
include "includes/footer.php";
