
<?php include ('vue/header.php');?>

<h1>Ajouter Fournisseur</h1>

<form method="POST" action="">

<?php 
if($message!=""){ ?>

<div class="alert alert-success" role="alert">
<?php echo $message;?>
</div>
<?php } ?>


<div class="form-group">
    <label for="exampleInputEmail1">Nom</label>
    <input type="text" name="nom" class="form-control"  placeholder="Entrer le nom" required>
</div>

<div class="form-group">
    <label for="exampleInputEmail1">Telephone</label>
    <input type="text" name="telephone" class="form-control"  placeholder="Entrer le Telephone" required>
</div>

<div class="form-group">
    <label for="exampleInputEmail1">Url</label>
    <input type="text" name="url" class="form-control"  placeholder="Entrer URL" required>
</div>

<button type="submit" name="enregistrer" class="btn btn-primary">Enregistrer</button>


</form>


<?php include ('vue/footer.php');?>