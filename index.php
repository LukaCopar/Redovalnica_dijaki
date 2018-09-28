<!DOCTYPE html>
<?php
include_once './database.php';
include_once './session.php';
include_once './Header.php';
?>
<html lang="sl">
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            table{
                margin-top: 200px;
                margin-left: 20%;
                width: 100%;
            }
            td,tr{
                height: 30px;
                overflow: hidden;
                width: 10%;
                margin: 0;
            }
            
            tr:nth-child(even){
                background-color: #0E0B16;
                color: #E7DFDD;
            }
            tr:nth-child(odd){
                background-color: #E7DFDD;
                color: #0E0B16;
            }
        </style>
    </head>
    <body>
         <?php
     if(!empty($_SESSION['first_name'])){
         ?>
     }
        <table>
            <td>Vrsta Ocene</td>
            <td>Predmet</td>
            <td>Solsko Leto</td>
            <td>Sklop</td>
            <td>Ocene</td>
       <?php
     }
         ?>
     <?php
     if(!empty($_SESSION['first_name'])){
       $query = "SELECT o.ocena, p.ime_predmeta, v.ime, s.leto, sk.ime_sklopa FROM ocene o INNER JOIN dijaki d ON o.dijak_id = d.id INNER JOIN predmeti p on o.predmet_id = p.id INNER JOIN solsko_leto s ON o.solsko_leto_id = s.id INNER JOIN vrste_ocene v ON o.vrsta_id = v.id INNER JOIN sklopi sk ON o.sklop_id = sk.id WHERE d.id =".$_SESSION['user_id']." ORDER BY p.ime_predmeta DESC";
                    $result = mysqli_query($link, $query);
                    while ($row = mysqli_fetch_array($result)) {
                        echo'<tr>';
                        
                        echo'<td>'.$row['ime'].'</td>';
                        echo'<td>'.$row['ime_predmeta'].'</td>';
                        echo'<td>'.$row['leto'].'</td>';
                        echo'<td>'.$row['ime_sklopa'].'</td>';
                        echo'<td>'.$row['ocena'].'</td>';
                        echo'</tr>';
                       
                    }
     }
        ?>
            
            
        </table>
            
    
        
        <?php
       
        ?>
    </body>
</html>
