<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
       <?php
       include_once './Header.php';
        include_once '../session.php';
        include_once '../database.php';
        
        ?>
    
    <head>
        <meta charset="UTF-8">
        <title>Admin Page</title>
        <style>
           @keyframes admin_button{
                0%{background-color: #0E0B16; }
                
                100%{background-color: #4717F6;}
                
            }
            
            body{
            background-image: url("../css/slike/background.jpg");
             
            }
            
            #levo{
                overflow: hidden;
               padding-top: 50px;
                float: left;
                height: 100vh;
                width: 23vh;
                background-color: #0E0B16;
                color: #E7DFFF;
                
            }
            
            
            .admin_gumb{
                margin: 5px;
                background: transparent;
                font-weight:700;
                display: inline-block;
                width: 100%;
                border-color: transparent;
                height: 5%;
                 color: #E7DFFF;
                
            }
            .admin_gumb:hover{
                animation-name: admin_button;
                animation-duration: 0.3s;
                animation-fill-mode: forwards;
                cursor: pointer;
                
            }
            
            #notar{
                margin-top: 50px; 
                float: right;
                padding: 10px;
                width: 150vh;
                height: 90vh;
                
                
            }
             table{
                margin-top: 200px;
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
        
        <div id="levo">
            
            <button class="admin_gumb" onclick="location.href='admin_page.php';"> dijaki</button>
            <button class="admin_gumb" onclick="location.href='admin_page_2.php';"> predmeti</button>
            <button class="admin_gumb" onclick="location.href='admin_page_1.php';"> ocene</button>
            <button class="admin_gumb" onclick="location.href='../ocene/Vnos_ocene.php';">Nova ocena</button>
            
        </div>
        <div id="notar">
            <table>
                
                <th>ime Ocene</th>
            <th>priimek</th>
            <th>Leto rojstva</th>
            <th>admin</th>
            <th>options</th>
                
          <?php
     if(!empty($_SESSION['first_name'])){
       $query = "SELECT d.id, d.ime, d.priimek, d.leto_roj, d.admin FROM dijaki d ORDER BY d.ime";
                    $result = mysqli_query($link, $query);
                    while ($row = mysqli_fetch_array($result)) {
                        echo'<tr>';
                        
                        echo'<td>'.$row['ime'].'</td>';
                        echo'<td>'.$row['priimek'].'</td>';
                        echo'<td>'.$row['leto_roj'].'</td>';
                        echo'<td>'.$row['admin'].'</td>';
                        echo '<td>'.'<a href="admin_delete.php?id='.$row['id'].'">delete/</a>'.'<a href="admin_edit.php?id='.$row['id'].'&ime='.$row['ime'].'&priimek='.$row['priimek'].'&leto='.$row['leto_roj'].'">edit</a>'.'</td>';
                        echo'</tr>';
                       
                    }
     }
        ?>
            </table>
        </div>
        <?php
        // put your code here
        ?>
    </body>
</html>
