<?php

include_once './database.php';
include_once './session.php';

if(isset($_POST['pass']) && isset($_POST['pass1']) && isset($_POST['pass2']) ){
    
    
$old1 = $_POST['pass'];
$new1 = $_POST['pass1'];
$new2 = $_POST['pass2'];

$password =  sha1($salt.$old1);


$query1 = "SELECT password FROM dijaki d WHERE d.id = ". $_SESSION['user_id'];
$result = mysqli_query($link, $query1);
$old2 = mysqli_fetch_array($result);
$old2 = $old2[0];

if($password != $old2){
    
    header("Location: edit_user.php");
    die();
    
}
if($new1 != $new2){
    
    header("Location: edit_user.php");
    die();
    
}
$password1 = sha1($salt.$new1);
$query="UPDATE `dijaki` SET `password`= '".$password1."' WHERE id = ".$_SESSION['user_id'];
mysqli_query($link,$query);
header("Location: index.php");

}
else{
    header("Location: edit_user.php");
}