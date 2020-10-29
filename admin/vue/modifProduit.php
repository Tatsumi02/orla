
<?php include ('vue/header.php');?>

<h1>Ajouter Produit</h1>

<form method="POST" action="index.php?page=trProduit" enctype="multipart/form-data">

<div class="form-group">
    <label for="exampleInputEmail1">Image</label>
    <input type="file" name="file" value="" class="form-control"  required>
</div>

<div class="form-group">
    <label for="exampleInputEmail1">Nom</label>
    <input type="text" name="nom" value="" class="form-control"  placeholder="Entrer le nom du produit" required>
</div>

<div class="form-group">
    <label for="exampleInputEmail1">Choisir le Fournisseur</label>
    <select name="fournisseur" value="" class="form-control" required>

    <?php for ($i=0;$i<sizeof($listeFournisseur);$i++){ ?>

    <option value="<?php echo $listeFournisseur[$i]['id']  ?>"> <?php echo $listeFournisseur[$i]['nom']  ?> </option>

    <?php } ?>
    </select>
</div>

<div class="form-group">
    <label for="exampleInputEmail1">Choisir Categorie</label>
    <select name="nom_categorie" value="" class="form-control" required>
        <?php for ($i=0;$i<sizeof($listeCat);$i++){ ?>

        <option value="<?php echo $listeCat[$i]['id']  ?>"> <?php echo $listeCat[$i]['nom']  ?> </option>

        <?php } ?>
    </select>
</div>



<div class="form-group">
    <label for="exampleInputEmail1">Prix</label>
    <input type="number" name="prix" value="" class="form-control"  placeholder="Entrer le prix du produit" required>
</div>

<div class="form-group">
    <label for="exampleInputEmail1">URL du produit chez le fournisseur</label>
    <input type="text" name="url" value="" class="form-control"  placeholder="URL du produit chez le fournisseur" required>
</div>

<button type="submit" name="enregistrer" class="btn btn-primary">Enregistrer</button>


</form>


<?php include ('vue/footer.php');?>