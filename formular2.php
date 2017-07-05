<html>
    <head> 
        <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1"> 
<meta name="description" content="">
    <meta name="author" content="">
        <title> Formular2 </title>
    <link rel="icon" href="index.png">
    <link href="starter-template.css" rel="stylesheet">
 <script src="../../assets/js/ie-emulation-modes-warning.js"></script>
   </head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<body>
<h1> <br> <br>Formular2 </h1> 

 <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
         <a class="navbar-brand" href="home.html">Home</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            
            <li><a href="about.html">About</a></li>
            <li><a href="contact.php">Contact </a></li>
            <li><a href="seite1.html"> Formular1 </a>
            </li><li><a href="seite2.html"><font color="#0051FF"> Formular2 </font></a></li>
          </ul>
        </div>
    </nav>
</body>
</html>


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
