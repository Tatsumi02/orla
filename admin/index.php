<?php
session_start();
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
include("modele/Fournisseur.php");


if(isset($_SESSION['email'])){


if(isset($_GET['page'])){

    $page = $_GET['page'];
//--------------------------------------------------------------
    if($page == "produit"){
        $categorie = new Fournisseur();
        $listeProd = $categorie->findProd();
       
        include('vue/produit.php');
    }

    if($page == "categorie"){
        $categorie = new Fournisseur();
        $listeCat = $categorie->findCatgorie();
       
        include('vue/categorie.php');
    }

    if($page == "formcategorie"){
        include('vue/modifCategorie.php');
    }

    if ($page == 'formproduit') {

         $categorie = new Fournisseur();
         $listeCat = $categorie->findAllCatgorie();
         $listeFournisseur = $categorie->findAll();

         include('vue/modifProduit.php');
    }

    if($page == "trCatgorie"){
       
        $four = new Fournisseur();
        

        if(isset($_POST['enregistrer'])){
            $nom_categorie = $_POST['nom_categorie'];
            $nom_fournisseur = $_POST['nom_fournisseur'];
            $description = $_POST['description'];

           $test = $four->insertC($nom_categorie,$nom_fournisseur,$description);
           
        }

        //$fournisseur = $four->find($id);
        header('location:?page=formcategorie');
        
    
    }

    if($page == "trProduit"){
       
        $four = new Fournisseur();
        

        if(isset($_POST['enregistrer'])){
            $nom = $_POST['nom'];
            $fournisseur = $_POST['fournisseur'];
            $url = $_POST['url'];
            $nom_categorie = $_POST['nom_categorie'];
            $prix = $_POST['prix'];
           
                $name = $_FILES['file']['name'];
                $target_dir = "upload/";
                $target_file = $target_dir . basename($_FILES["file"]["name"]);
              
                // Select file type
                $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
              
                // Valid file extensions
                $extensions_arr = array("jpg","jpeg","png","gif");
              
                // Check extension
                if( in_array($imageFileType,$extensions_arr) ){
               
             
                    $test = $four->insertP($nom_categorie,$nom,$url,$prix,$fournisseur,$target_dir.$name);

                   // Upload file
                   move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);
                   
                                  
                }
               
           
           
        }

        //$fournisseur = $four->find($id);
        header('location:?page=formproduit');
        
    
    }


    if($page == "deletecategorie"){
        
        $id = $_GET['id'];
        $cat = new Fournisseur();
        $cat->deletecat($id);
        header("Location: index.php?page=categorie");
    }

    if($page == "deleteproduit"){
        
        $id = $_GET['id'];
        $cat = new Fournisseur();
        $cat->deleteprod($id);
        header("Location: index.php?page=produit");
    }

    //deleteproduit


    
//---------------------------------------------------------------
    if($page == "deletefournisseur"){
        
        $id = $_GET['id'];
        $fournisseur = new Fournisseur();
        $fournisseur->delete($id);
        header("Location: index.php?page=fournisseur");
    }

    if($page == "modifierfournisseur"){
        $message = "";
        $id = $_GET['id'];
        $four = new Fournisseur();
        

        if(isset($_POST['enregistrer'])){
            $nom = $_POST['nom'];
            $telephone = $_POST['telephone'];
            $url = $_POST['url'];

           $test = $four->update($id,$nom,$telephone,$url);
           if($test){
               $message = "Modification ok";
           }else{
            $message = "erreur";
           }
        }

        $fournisseur = $four->find($id);
        include('vue/modifierfournisseur.php');
    
    }

    if($page == "fournisseur"){
        $fournisseur = new Fournisseur();
        $listeFournisseur = $fournisseur->findAll();
       
        include('vue/fournisseur.php');
    }

    

    if($page == "addfournisseur"){
        $message = "";
        if(isset($_POST['enregistrer'])){
            $nom = $_POST['nom'];
            $telephone = $_POST['telephone'];
            $url = $_POST['url'];

           $fournisseur = new Fournisseur();
           $test = $fournisseur->insert($nom,$telephone,$url);
           if($test){
               $message = "enregistrement ok";
           }else{
            $message = "erreur";
           }
        }
        include('vue/addfournisseur.php');
    }
    if($page == "logout"){
        session_destroy();
        header("Location : index.php");
    }
}else{

     $categorie = new Fournisseur();
        $listeProd = $categorie->findProd();
       
        include('vue/produit.php');

}


}else{
    $error = -1;
    if(isset($_POST['valider'])){

        $email = $_POST['email'];

        $password = $_POST['password'];
        
        if(isUser($email,$password,$database) == TRUE){

            $_SESSION['email'] = $email;
            header("Location: index.php?page=produit");
        }else{
            $error = 0;
        }
        

    }
   

   include("vue/login.php");
}





function isUser($email,$password,$database){

    $test = FALSE;
    $link = mysqli_connect("localhost","root","");

    if(!$link){
        echo "Connexion en base de donnee echoue";
        exit;
    }

    mysqli_select_db($link,"orla");
    $sql = "SELECT email,motpasse FROM user";
    $liste = mysqli_query($link,"$sql");

    while($data = mysqli_fetch_array($liste)){
        $emaildata = $data['email'];
        $motpassedata = $data['motpasse'];
        if(($emaildata == $email) AND ($motpassedata == $password)){
            $test = TRUE;
        }

    }
   


    return $test;

}

?>