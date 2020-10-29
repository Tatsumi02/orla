<?php

class Fournisseur{


    private $id;
    private $nom;
    private $telephone;
    private $url;
    private $link;

    function __construct(){
        $this->link = mysqli_connect("localhost","root","");

        if(!$this->link){
            echo "Connexion en base de donnee echoue";
            exit;
        }
        mysqli_select_db($this->link,"orla");
    }


    public function insert($nom,$telephone,$url){

        $sql="INSERT INTO fournisseur VALUES(NULL,'$nom','$telephone','$url')";
        $req = mysqli_query($this->link,"$sql");
        return $req;

    }

    public function update($id,$nom,$telephone,$url){
        $sql="UPDATE fournisseur SET nom = '$nom', telephone='$telephone', url='$url' WHERE id = $id";
        $req = mysqli_query($this->link,"$sql");
        return $req;
    }

    public function delete($id){

        $sql="DELETE FROM fournisseur WHERE id = $id";
        $req = mysqli_query($this->link,"$sql");
        return $req;

    }

    public function find($id){
        $liste = [];
        $sql="SELECT * FROM fournisseur WHERE id=$id";
        $req = mysqli_query($this->link,"$sql");
        while($data = mysqli_fetch_array($req)){
            $liste['id'] = $data['id'];
            $liste['nom'] = $data['nom'];
            $liste['telephone'] = $data['telephone'];
            $liste['url'] = $data['url'];
          
        }

        return $liste;
    }

    public function findAll(){
        $liste = [];
        $i=0;
        $sql="SELECT * FROM fournisseur";
        $req = mysqli_query($this->link,"$sql");
        while($data = mysqli_fetch_array($req)){
            $liste[$i]['id'] = $data['id'];
            $liste[$i]['nom'] = $data['nom'];
            $liste[$i]['telephone'] = $data['telephone'];
            $liste[$i]['url'] = $data['url'];
            $i++;
        }

        return $liste;
    }

    public function insertC($nom_categorie,$nom_fournisseur,$description){
        $sql="INSERT INTO catgorie VALUES(NULL,'$nom_categorie','$description','$nom_fournisseur')";
        $req = mysqli_query($this->link,"$sql");
        return $req;
    }

    public function findCatgorie(){
        $sql="SELECT * FROM catgorie";
        $req = mysqli_query($this->link,"$sql");

        return $req;
    }

    public function findAllCatgorie(){

        $liste=[];
        $i=0;
        $sql="SELECT * FROM catgorie";
        $req = mysqli_query($this->link,"$sql");
        while($data = mysqli_fetch_array($req)){
            $liste[$i]['id'] = $data['id'];
            $liste[$i]['nom'] = $data['nom'];
            $liste[$i]['description'] = $data['description'];
            $i++;
        }

        return $liste;
    }

    public function findProd(){
        $sql="SELECT * FROM produits";
        $req = mysqli_query($this->link,"$sql");

        return $req;
    }

   public function deletecat($id){
    $sql="DELETE FROM catgorie WHERE id = $id";
    $req = mysqli_query($this->link,"$sql");
    return $req;
   }

   public function deleteprod($id){
    $sql="DELETE FROM produits WHERE id = $id";
    $req = mysqli_query($this->link,"$sql");
    return $req;
   }

   public function insertP($nom_categorie,$nom,$url,$prix,$fournisseur,$nomImage){
    $sql="INSERT INTO produits VALUES(NULL,'$nom','$url',$nom_categorie,$prix,$fournisseur,'$nomImage')";
    $req = mysqli_query($this->link,"$sql");
    return $req;
   }

   public function updatePimage($id,$nomImage){

    $sql = "UPDATE produits SET image = '$nomImage' WHERE id = $id";
    $req = mysqli_query($this->link,"$sql");
    return $req;
   }




}