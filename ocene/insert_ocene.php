

<?php

include_once '../database.php';
include_once '../session.php';

 $query1 = "SELECT id FROM `vrste_ocene` WHERE (ime = '".$_POST['vrsta']."')";
 
    $result1 = mysqli_query($link, $query1);
while($row = mysqli_fetch_array($result1)){
    $vrsta = $row['id'];
    
}
$query2 = "SELECT id FROM `predmeti` WHERE (ime_predmeta = '".$_POST['predmet']."')";
   
    $result2=mysqli_query($link, $query2);
while($row = mysqli_fetch_array($result2)){
    $predmet = $row['id'];
    
}

$query3 = "SELECT id FROM `solsko_leto` WHERE (leto = ".$_POST['leto'].")";

    $result3=mysqli_query($link, $query3);
while($row = mysqli_fetch_array($result3)){
    $leto = $row['id'];
    
}

$query4 = "SELECT id FROM `dijaki` WHERE (ime = '".$_POST['ucenc']."')";

    $result4=mysqli_query($link, $query4);
while($row = mysqli_fetch_array($result4)){
    $ucenc = $row['id'];
    
}

$query5 = "SELECT id FROM `sklopi` WHERE (ime_sklopa = '".$_POST['sklop']."')";

    $result5=mysqli_query($link, $query5);
while($row = mysqli_fetch_array($result5)){
    $sklop = $row['id'];
    
}





if(!empty($_POST['predmet']) && !empty($_POST['ocena']) && !empty($_POST['leto']) && !empty($_POST['ucenc']) && !empty($_POST['vrsta']) && !empty($_POST['sklop'])  )
   {
   $query = "INSERT INTO `ocene`(`sklop_id`, `solsko_leto_id`, `vrsta_id`, `dijak_id`, `predmet_id`, `ocena`) VALUES (".$sklop.",".$leto.",".$vrsta.",".$ucenc.",".$predmet.",".$_POST['ocena'].");";
   $result = mysqli_query($link, $query);
   
    header("Location: ../index.php");
   }
   else
   {
        header("Location: Vnos_ocene.php");
       
   }

