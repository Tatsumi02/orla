<?php include ('vue/header.php');?>

<h1>Produitss</h1>
<p>
<a href="index.php?page=formproduit" class="btn btn-primary">+ Produit</a>
</p>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Image</th>
      <th scope="col">Nom</th>
      <th scope="col">Url</th>
      <th scope="col">Prix</th>
      <th scope="col">Option</th>
      
    </tr>
  </thead>
  <tbody>

  <?php while($donnees = mysqli_fetch_array($listeProd)){ ?>
    <tr>
      <td><img src="<?php echo $donnees['image']; ?>"  style="width:100px;"/> </td>
      <td><?php echo $donnees['nom']; ?></td>
      <td><?php echo $donnees['url']; ?></td>
      <td><?php echo $donnees['prix']; ?></td>
      <td> <a href="?page=deleteproduit&id=<?php echo $donnees['id']; ?>" class="delete" id="">Supprimer</a></td>
    </tr>

  <?php } ?>
  </tbody>
</table>


<?php include ('vue/footer.php');?>