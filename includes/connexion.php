<?php
/**
 * Created by PhpStorm.
 * @author Yann Le Scouarnec <bunkermaster@gmail.com>
 * Date: 22/11/2017
 * Time: 15:46
 */
try {
    $conn = new PDO('mysql:host=127.0.0.1;dbname=kandt', 'root', 'rootroot1');
} catch(PDOException $exception) {
    die("Arrrrrghhhh X_x");
}