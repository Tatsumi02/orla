
<?php include ('vue/header.php');?>

<h1>Modifier Fournisseur</h1>

<form method="POST" action="">

<?php 
if($message!=""){ ?>

<div class="alert alert-success" role="alert">
<?php echo $message;?>
</div>
<?php } ?>


<div class="form-group">
    <label for="exampleInputEmail1">Nom</label>
    <input type="text" name="nom" value="<?php echo $fournisseur['nom']; ?>" class="form-control"  placeholder="Entrer le nom" required>
</div>

<div class="form-group">
    <label for="exampleInputEmail1">Telephone</label>
    <input type="text" name="telephone" value="<?php echo $fournisseur['telephone']; ?>" class="form-control"  placeholder="Entrer le Telephone" required>
</div>

<div class="form-group">
    <label for="exampleInputEmail1">Url</label>
    <input type="text" name="url" value="<?php echo $fournisseur['url']; ?>" class="form-control"  placeholder="Entrer URL" required>
</div>

<button type="submit" name="enregistrer" class="btn btn-primary">Enregistrer</button>


</form>


<?php include ('vue/footer.php');?>