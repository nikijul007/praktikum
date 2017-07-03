<?php
$nickname = trim($_POST["nickname"]);
$password = $_POST["password"];

$trimmed = trim($nickname);

if (($nickname !="") && ($password !="") && isset($_POST["checkbox"]))
{
 echo "Hallo $nickname. Ihr Password lautet $password.";
}
else
{
  echo "Bitte alle Angaben tätigen.";
}
?>

