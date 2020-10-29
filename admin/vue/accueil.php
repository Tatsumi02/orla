<html>
<head>
<title>Accueil</title>
<link rel="stylesheet" href="css/boostrap.css">
<link rel="stylesheet" href="css/style.css">
</head>

<body>

<div class="container">
<div class="header">



<?php include ("header.php"); ?>
</div>

<div class="content">

<h1>Accueuil</h1>

Bienvenue <?php echo $_SESSION['nom']; ?>
</div>

<?php include("footer.php"); ?>

<?php


?>


</div>


</body>

</html>