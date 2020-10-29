
<?php include ('vue/header.php');?>

<h1>Ajouter Categorie</h1>

<form method="POST" action="index.php?page=trCatgorie">

<div class="form-group">
    <label for="exampleInputEmail1">Nom</label>
    <input type="text" name="nom_categorie" value="" class="form-control"  placeholder="Entrer le nom" required>
</div>

<div class="form-group" style="display:none;">
    <label for="exampleInputEmail1">Nom fournisseur</label>
    <input type="text" value=" " name="nom_fournisseur" value="" class="form-control"  placeholder="Entrer le nom du fournisseur" required>
</div>

<div class="form-group">
    <label for="description">description catgorie</label>
    <textarea name="description" class="form-control"  placeholder="Entrer la description de la catgorie" required></textarea>
</div>

<button type="submit" name="enregistrer" class="btn btn-primary">Enregistrer</button>


</form>


<?php include ('vue/footer.php');?>