<?php
session_start();
$_SESSION['user'] = $_POST['pseudo'];
echo $_POST["name"];

if (isset($_POST[""]))
{
  $user = $_POST["..."];
}
echo $user;
?>

<DOCTYPE html>
  <html>
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="stylesheet" type="text/css" src="style.css">
      <title> quizz </title>
    </head>
    <body>

      <form action="user.php" method="post">
         <input class="class" name="name">
         <input class="class" name="surname">
         <input id="submit" type="submit">
         <input type="hidden" value="hidden_field">
     </form>

    </body>
  </html>
