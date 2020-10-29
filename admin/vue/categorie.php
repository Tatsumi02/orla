
<?php include ('vue/header.php');?>

<h1>Categorie</h1>
<p>
<a href="index.php?page=formcategorie" class="btn btn-primary">+ Categorie</a>
</p>
<table class="table table-hover">
  <thead>
    <tr>
      
      <th scope="col">Nom categorie</th>
      <th scope="col">Description</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

  <?php while($donnees = mysqli_fetch_array($listeCat)){ ?>
    <tr>
      
      <td><?php echo $donnees['nom']; ?></td>
      <td><?php echo $donnees['description']; ?></td>
      <td> <a href="?page=deletecategorie&id=<?php echo $donnees['id']; ?>" class="delete" id="">Supprimer</a></td>
    </tr>

  <?php } ?>
  </tbody>
</table>

<?php include ('vue/footer.php');?>