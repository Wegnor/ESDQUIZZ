<?php
//require_once('database.php');

// $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_BASE);
// $sql = "SELECT * FROM quizz1";
// $result = mysqli_query($conn, $sql);
// $res = mysqli_fetch_array($result);
// echo $res;
// mysqli_close($conn);

require('session.php');
$val = $_POST['name'];
echo $val;

$_SESSION['pseudo'] = $val;

echo $_POST["name"]

$servernanme = "localhost";
$username = "root";
$dbname = "root";

$conn = new mysqli($servernanme, $username, $password, $dbname);

$sql = "INSERT INTO "
if (isset($_POST['pseudo'])==1
{

}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" src="style.css">
    <title> quizz </title>
  </head>
  <body>

    <form action="quizz.php" method="post">
       <p>gros</p>
       nom : <input class="class" name="name">
       prenom : <input class="class" name="surname">
       <input id="submit" type="submit">
       <input type="hidden" value="hidden_field">
       <?php echo $_POST["name"] ?>
   </form>


<!--
   <section class="main1">
     <article class="tree"></article>
     <article class="tree"></article>
     <article class="tree"></article>
   </section>
-->
   <section class="resultat">
     <<?php
     if ('answer' == 'reponse') {
       echo "oui";
     }
     else {
       echo "non";
     }
      ?>
   </section>
  <!--
  <form action="devoir.php" method="post">
    </form>
  -->

  </body>
</html>
