<?php
/**
 * Created by PhpStorm.
 * @author Yann Le Scouarnec <bunkermaster@gmail.com>
 * Date: 28/03/2018
 * Time: 11:07
 */
try {
    $pdo = new PDO('mysql:host=localhost;dbname=kandtG2;port=3307', 'root','root');
} catch (PDOException $exception) {
    die($exception->getMessage());
}
$pdo->exec('SET NAMES UTF8');
