<?php
function dbConnect(){

try{
  $bdd = new PDO('mysql:host=localhost;dbname=orla', 'root', '');
  }catch(Exeption $e){ //si il ya eu une erreur
echo 'erreur :' . $e -> getMessage();
}
    return $bdd;
}

//autre fonction
function reqcat($q){
    $db =  dbConnect();
    $r = $db -> prepare('SELECT * FROM catgorie WHERE nom=:q');
    $r -> execute(array( 'q' => $q ));

    return $r;
}

function reqpro($idcat){
    $db =  dbConnect();
    $r = $db -> prepare('SELECT * FROM produits WHERE idcategorie=:cat');
    $r -> execute(array( 'cat' => $idcat ));

    return $r;
}
