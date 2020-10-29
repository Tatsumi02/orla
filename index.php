<?php

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
 include("model/model.php");


if(isset($_GET['page'])){
    $page = $_GET['page'];

    if($page == 'search'){

        $q = $_GET["q"];
        
        $affich= reqcat($q);
        $idcat=0;
        while ($donnees2 = $affich->fetch()) {
        	$idcat=$donnees2["id"];
        }

        $affichproduit=reqpro($idcat);


      
        include ('vue/ORLA-SHOP/web/index2.php');
    }


}else{
    include ('vue/index1.php');
}
