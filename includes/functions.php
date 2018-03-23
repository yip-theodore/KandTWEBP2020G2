<?php
/**
 * Created by PhpStorm.
 * @author Yann Le Scouarnec <bunkermaster@gmail.com>
 * Date: 28/02/2018
 * Time: 12:42
 */

/**
 * generates nav LI element
 * @param string $page page name with .php at the end
 * @param string $linkText text that goes in the link (d'uhhhh)
 */
function li($linkText, $page, $activePage)
{
    $active = "";
    if($page === $activePage){
        $active = ' class="active"';
    }
?>
    <li<?=$active?>><a href="?page=<?=$page?>"><?=$linkText?></a></li>
<?php
}

/**
* fetch content from database
* @param object $conn PDO
* @param string $slug slug
* @return array $row content
*/
function getContent($conn, $slug)
{
  $requete = "SELECT
    `h1`,
    `p`,
    `span-class`,
    `span-text`,
    `img-alt`,
    `img-src`
  FROM
    `content`
  WHERE
    `slug` = :slug
  ;";
  $stmt = $conn->prepare($requete);
  $stmt->bindValue(':slug', $slug);
  $stmt->execute();
  $row = $stmt->fetch(PDO::FETCH_ASSOC);

  return $row;
}
