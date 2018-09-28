<?php
    include_once '../session.php';
    include_once '../database.php';

    $id = (int) $_GET['id'];
    
    $query1 = "SELECT p.ime_predmeta, o.id FROM ocene o INNER JOIN predmeti p ON p.id = o.predmet_id WHERE p.id = $id";
        $result = mysqli_query($link, $query1);
        if (mysqli_num_rows($result) > 0) {
            
             
            header("Location: admin_page_2.php");
         die();
           
        }else{
    
    $query = "DELETE FROM predmeti WHERE id=$id";
    mysqli_query($link, $query);
    
        }
    header("Location: admin_page_2.php");