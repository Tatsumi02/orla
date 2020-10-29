<?php

session_start();

/*$database = [
    ['orelien.kamga@gmail.com','root','kamga','orelien'],
    ['ladouce@gmail.com','1234','ladouce','ladouce'],
]; */

$database = $_SESSION['database'];

$email = $_POST['email'];

$password = $_POST['password'];

if(isUser($email,$password,$database) == TRUE){
    $_SESSION['email'] = $email;
    header("Location: filactualite.php");
}else{
    header("Location: index.php?error=0");
}



function isUser($email,$password,$database){

    $test = FALSE;
    $link = mysqli_connect("localhost","root","Orelien1234.");

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



