<link rel="stylesheet" href="styleData.css">
<body>
<?php
try
{
   $bdd = new PDO('mysql:host=localhost;dbname=esdquizz;charset=utf8', 'root', '');
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}

$link = mysqli_connect("localhost", "root", "", "esdquizz");

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$nom = mysqli_real_escape_string($link, $_REQUEST['nompseudo']);

$sql = "INSERT INTO pseudo (pseudo_joueur) VALUES ('$nompseudo')";

if (mysqli_query($link, $sql))  {
} else{
    echo "Nope c'est cassé..." . mysqli_error($link);
}
?>
<br / >
<?php
$reponse =  $bdd->query('SELECT * FROM questionsreponses ORDER BY RAND() LIMIT 1');
	while ($donnees = $reponse->fetch()) {
        ?><div class="question">
            <?php echo $donnees['question']; ?></div>
        <div class="1erligne">
        <div class="1">
            <?php echo $donnees['choix1']; ?></div>
        <div class="2">
            <?php echo $donnees['choix2']; ?></div>
        </div>
        <div class="2eligne">
        <div class="3">
            <?php echo $donnees['choix3']; ?></div>
        <div class="4">
            <?php echo $donnees['choix4']; ?></div>
        </div>
        <?php
	}
mysqli_close($link);
?>
</body>
