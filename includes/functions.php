<?php
/**
 * Created by PhpStorm.
 * @author Yann Le Scouarnec <bunkermaster@gmail.com>
 * Date: 28/02/2018
 * Time: 12:42
 */
echo basename($_SERVER['PHP_SELF']);
function li($page, $linkText)
{
    $active = "";
    if($page === basename($_SERVER['PHP_SELF'])){
        $active = ' class="active"';
    }
?>
    <li<?=$active?>><a href="<?=$page?>"><?=$linkText?></a></li>
<?php
}
