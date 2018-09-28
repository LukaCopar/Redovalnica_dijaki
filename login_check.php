<?php

include_once './session.php';
    include_once './database.php';

    $user = $_POST['first_name'];
    $pass = $_POST['pass'];
    
    if (!empty($user) && !empty($pass)) {
        //pripravimo geslo
        $pass = sha1($salt.$pass);
        $query = "SELECT * FROM dijaki WHERE ime='$user' AND password='$pass'";
        $result = mysqli_query($link, $query);
        if (mysqli_num_rows($result) != 1) {
            
             
            header("Location: login.php");
         
           
        }
        else {
            //vse je ok - naredi prijavo
            //rezultat select stavka - shrani v array
            $user = mysqli_fetch_array($result);
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['first_name'] = $user['ime'];
            $_SESSION['last_name'] = $user['priimek'];
            
            //preusmeritev na login
           
            header("Location: index.php");
            
        }
    }
    else {
        //preusmeritev na login
       
        header("Location: login.php");
        
    }
?>