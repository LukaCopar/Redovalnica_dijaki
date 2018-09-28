<?php

include_once './database.php';

if(!empty($_POST['ime']) && !empty($_POST['priimek']) && !empty($_POST['leto_roj']) && !empty($_POST['razred'])  ){
   $query = "INSERT INTO `dijaki`(`razred_id`, `ime`, `priimek`, `leto_roj`) VALUES ((SELECT id FROM `razredi` WHERE (ime = '".$_POST['razred']."')), '".$_POST['ime']."', '".$_POST['priimek']."', ".$_POST['leto_roj']." );";
   mysqli_query($link, $query);
   
   
   }



 header("Location: vnos_ucenca.php");