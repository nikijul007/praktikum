<?php
$email = trim($_POST["email"]);
$password = $_POST["password"];

if (! filter_var($email, FILTER_VALIDATE_EMAIL)) 
{ 
    echo "Bitte eine gültige Email angegeben";
    die();
}

if ($email == "" || $password =="" || !isset($_POST["checkbox"]))
{
    echo "Bitte alle Angaben tätigen.";
    die();
}
echo "Ihre E-Mail lautet $email. Ihr Password lautet $password.";

?>
