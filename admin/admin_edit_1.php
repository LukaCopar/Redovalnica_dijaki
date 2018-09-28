<?php

include_once '../database.php';


$razred = $_POST['razred'];
$ime = $_POST['ime'];
$priimek = $_POST['priimek'];
$leto = $_POST['leto_roj'];
$id = $_POST['id'];



   $query = "UPDATE `dijaki` SET `razred_id`=$razred,`ime`='$ime',`priimek`='$priimek',`leto_roj`=$leto WHERE id = '$id'";
   mysqli_query($link, $query);
   
   
   



 header("Location: admin_page.php");