<?php
    include_once '../session.php';
    include_once '../database.php';

    $id = (int) $_GET['id'];
   
    
    
    $query = "DELETE FROM ocene WHERE id=$id";
    mysqli_query($link, $query);
        
   
    header("Location: admin_page_1.php");
?>