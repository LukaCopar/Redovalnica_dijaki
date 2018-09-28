<?php

include_once './database.php';
include_once './session.php';


$pass = $_POST['pass'];

$pass = sha1($salt.$pass);



if($_POST['pass'] != $_POST['pass2']){


    header("Location: vnos_ucenca.php");
    
    
}
if(!empty($_POST['ime']) && !empty($_POST['priimek']) && !empty($_POST['leto_roj']) && !empty($_POST['razred']) && !empty($_POST['pass']) && !empty($_POST['pass2'])  )
   {
   $query = "INSERT INTO `dijaki`(`razred_id`, `ime`, `priimek`, `leto_roj`, `password`) VALUES ((SELECT id FROM `razredi` WHERE (ime = '".$_POST['razred']."')), '".$_POST['ime']."', '".$_POST['priimek']."', ".$_POST['leto_roj'].",'".$pass."' );";
   $result = mysqli_query($link, $query);
    header("Location: login.php");
   }
   else
   {
        header("Location: vnos_ucenca.php");
       
   }


