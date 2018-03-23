<?php
require_once "includes/functions.php";
require_once "includes/connexion.php";

define('APP_DEFAULT_PAGE', 'el-miedo-de-los-teletubbies');

$slug = $_GET['page'] ?? APP_DEFAULT_PAGE;

$content = getContent($conn, $slug);

if ($content === false) {
    http_response_code(404);
    $slug = APP_DEFAULT_PAGE;
    $content = getContent($conn, $slug);
}

include "includes/header.php";
?>
    <div class="container theme-showcase" role="main">
        <div class="jumbotron">
            <h1><?=$content['h1']?></h1>
            <p><?=$content['p']?></p>
            <span class="label <?=$content['span-class']?>"><?=$content['span-text']?></span>
        </div>
        <img class="img-thumbnail" alt="<?=$content['img-alt']?>" src="img/<?=$content['img-src']?>" data-holder-rendered="true">
    </div>
<?php
include "includes/footer.php";
?>
