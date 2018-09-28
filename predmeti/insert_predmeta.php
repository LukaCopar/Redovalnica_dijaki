

<?php

include_once '../database.php';
include_once '../session.php';

 $predmet1 = $_POST['predmet'];
 
 
 $query = "INSERT INTO predmeti(ime_predmeta) VALUES('$predmet1')";
 mysqli_query($link, $query);
 header("Location: ../admin/admin_page_2.php");

