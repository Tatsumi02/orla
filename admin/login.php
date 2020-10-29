<!DOCTYPE html>
<html>
<head>
	<title>login</title>
</head>
<body>
	<div style="margin:auto;width: 30%; margin-top: 100px;">
		<form method="POST" action="projetladouce/index.php">

			<fieldset>
				<legend>Connexion</legend><br>

				<?php if(isset($_GET['error'])) echo "<p style=color:red> les informations entrées sont erronées </p> "?><br>
				<label> Username</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="text" name="username" placeholder="entrer votre nom d'utilisateur"><br><br><br>
				<label> Mot de passe</label>
				<input type="password" name="password" placeholder="entrer votre mot de passe"><br><br><br><br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="submit" value="Se Connecter" >
			</fieldset>
		</form>
	</div>
</body>
</html>