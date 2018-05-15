<?php
  define("DB_HOST", "localhost");
  define("DB_USER", "root");
  define("DB_PASS", "root");
  define("DB_BASE", "quizz1");
/* define("DB_SENDER", "localhost"); */

/* chais pas a quoi ça sert */
try
{
   $bdd = new PDO('mysql:host=localhost;dbname=esdquizz;charset=utf8', 'root', '');
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}
/*voilà voilà*/

$nom = mysqli_real_escape_string($link, $_REQUEST['nompseudo']);

$sql = "INSERT INTO pseudo (pseudo_joueur) VALUES ('$nompseudo')";

$link = mysqli_connect("localhost","root","root","quizz1");
if ($link === false) {die("error : Bleh !". mysqli_connect_error);}
$name = mysqli_real($link, $_request['name']);
$sql = "INSERT INTO quizz1(nom) VALUES('$name')";
if (mysqli_query($link, $sql)) {echo "noice !";}
else {
  echo "Blotch";
}

$reponse =  $bdd->query('SELECT * FROM questionsreponses ORDER BY RAND() LIMIT 1');
	while ($donnees = $reponse->fetch()) {
        ?><article class="main2">
            <?php echo $donnees['question']; ?></article>

        <article class="1">
            <?php echo $donnees['un']; ?>
        </article>
        <article class="2">
            <?php echo $donnees['deux']; ?>
        </article>

        <article class="3">
            <?php echo $donnees['trois']; ?>
        </article>

        <?php
	}
mysqli_close($link);
?>
SELECT * FROM 'quizzu'
