


<html>
<head>
<title>Contact</title>
<link rel="stylesheet" href="css/boostrap.css">
<link rel="stylesheet" href="css/style.css">
</head>

<body>

<div class="container">
<div class="header">

<?php include ("header.php"); ?>

<?php

if(isset($_POST['nom'])){
  $nom = $_POST['nom'];
  $_SESSION['nom'] = $nom;
}




?>


</div>

<div class="content">

<h1>Contact</h1>

<form method="POST" action="">
  <div class="form-group">
    <label for="exampleInputEmail1">Votre nom </label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="nom" placeholder="Enter your name">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>

  <button type="submit" class="btn btn-primary">Envoyer</button>
</form>
</div>


<?php include("footer.php"); ?>

</div>




</body>

</html>