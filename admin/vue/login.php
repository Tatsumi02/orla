
<html>
<head>
<title>ORLA SHOP COMPARAISON</title>
<link rel="stylesheet" href="css/boostrap.css">

</head>

<body>



<div class="container-fluid">
<h1>Login - ORLA SHOP COMPARAISON</h1>
<div class="row">
    <div class="col-sm-8">
<form method="POST" action="index.php">

<?php 
if($error==0){ ?>

<div class="alert alert-danger" role="alert">
Email ou Mot de passe errone
</div>
<?php } ?>



  <div class="form-group row">
    <label for="inputAddress" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
    <input name="email" type="email" class="form-control" id="inputAddress" placeholder="Email" required>

     
       </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input name="password" type="password" class="form-control" id="inputPassword">
    </div>
  </div>
  <button type="submit"  name="valider" class="btn btn-primary">Log In</button>
</form>

</div>
</div>
</div>


</body>


</html>