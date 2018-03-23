<?php
$requete = "SELECT
  `nav-title`,
  `slug`
FROM
  `content`
;";
$stmt = $conn->prepare($requete);
$stmt->execute();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
</head>
<body role="document">
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="index.php">WtfWeb</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <?php
                while (false !== $nav = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    li($nav['nav-title'], $nav['slug'], $slug);
                }
                ?>
            </ul>
        </div>
    </div>
</nav>
