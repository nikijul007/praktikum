<?php
session_start();
 $formNachname = (isset($_SESSION["nname"]) ? $_SESSION["nname"] : '');
 $formAdresse = (isset($_SESSION["adresse"]) ? $_SESSION["adresse"] : '');
 $formNummer = (isset($_SESSION["nummer"]) ? $_SESSION["nummer"] : '');
 $formStadt = (isset($_SESSION["stadt"]) ? $_SESSION["stadt"] : '');
 $formPlz = (isset($_SESSION["plz"]) ? $_SESSION["plz"] : '');
 $formName = (isset($_SESSION["vname"]) ? $_SESSION["vname"] : '');
 
 ?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1"> 
<meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="index.png">
    <title> Contact  </title>
<link href="starter-template.css" rel="stylesheet">
 <script src="../../assets/js/ie-emulation-modes-warning.js"></script>



</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<body>
<h1> <br> <br> Contact </h1>

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
            <li><a href="contact.php"><font color="#0051FF"> Contact </font></a></li>
            <li><a href="seite1.html"> Formular1 </a>
            </li><li><a href="seite2.html"> Formular2 </a></li>
          </ul>
        </div>
    </nav>


<form action="formularContact.php" method="post">
    <div class="form-group"> 
        <label for="name">Name</label>
        <input type="name" name="name" value="<?php echo (isset($_SESSION["vname"]) ? $_SESSION["vname"] : ''); ?>" placeholder="Vorame"> 
        <input type="name" name="nachname" value="<?php echo $formNachname?>" placeholder="Nachname">
    </div>
    <div class="form-group"> 
        <label for="adresse">Adresse</label>
         <input type="name" name="adresse" value="<?php echo $formAdresse ?>" placeholder="Straße" >
        <input type="text" name="nummer" value="<?php echo $formNummer ?>" placeholder="Hausnummer">
    </div>
    <div class="form-group"> 
        <label for="Stadt">Stadt / PLZ</label>
        <input type="name" name="stadt" value="<?php echo $formStadt ?>" placeholder="Stadt">
        <input type="text" name="plz" value="<?php echo $formPlz ?>" placeholder="PLZ" minlength="3" maxlength="5">     
    </div>
    
    <div class="checkbox">
        <label>
          <input type="checkbox" name="checkbox" value="1"> Checkbox
        </label>
    </div>
    <input type="submit" name="submit" value="Submit">
    <input type="submit" name="reset" value="Reset" >
  </form>
    <?php
    var_dump($_SESSION);
    if (isset($_SESSION["errorMessage"])) {
        echo 'BLUBBBB';
        echo $_SESSION["errorMessage"];
    }
      
 ?>
</body>
</html>


