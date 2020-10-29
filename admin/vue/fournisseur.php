
<?php include ('vue/header.php');?>

<h1>Fournisseur</h1>

<p>
<a href="index.php?page=addfournisseur" class="btn btn-primary">+ Fournisseur</a>
</p>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nom</th>
      <th scope="col">Telephone</th>
      <th scope="col">URL</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

  <?php for($i=0;$i<sizeof($listeFournisseur);$i++){ ?>
    <tr>
      <th scope="row"><?php 
      $id = $listeFournisseur[$i]['id'];
      echo $listeFournisseur[$i]['id'] ?></th>
      <td><?php echo $listeFournisseur[$i]['nom'] ?></td>
      <td><?php echo $listeFournisseur[$i]['telephone'] ?></td>
      <td><?php echo $listeFournisseur[$i]['url'] ?></td>
      <td><a href="index.php?page=modifierfournisseur&id=<?php echo $id; ?>">Modifier</a> &nbsp;&nbsp; <a href="?page=deletefournisseur&id=<?php echo $id; ?>" class="delete" id="<?php echo $id;?>">Supprimer</a></td>
    </tr>

  <?php } ?>
  </tbody>
</table>

<?php include ('vue/footer.php');?>

<script>

$(document).ready(function(){

$(".delete").click(function(){

var id = $(this).attr("id");
  var r = confirm("Voulez vous vraiment supprimer ?");
if (r == true) {
  window.location.href = "index.php?page=deletefournisseur&id="+id;
} else {
  txt = "You pressed Cancel!";
}

});


});

</script>