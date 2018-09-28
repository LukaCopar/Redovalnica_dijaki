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
             color: #E7DFFF;
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
            
            #form_admin{
                display: inline-block;
                margin-left: 10px;
                
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
             <form id="form_admin" action="./admin_page_1.php" method="post">
                 
                 <select name="ime">
            
                
                <?php
                    $query = "SELECT ime FROM `dijaki`";
                    $result = mysqli_query($link, $query);
                    while ($row = mysqli_fetch_array($result)) {
                        echo '<option value="'.$row['ime'].'" >'.$row['ime'].'</option>';
                       
                    }
                ?>
            </select><br>
                 <select name="leto">
            
                
                <?php
                    $query = "SELECT leto FROM `solsko_leto`";
                    $result = mysqli_query($link, $query);
                    while ($row = mysqli_fetch_array($result)) {
                        echo '<option value="'.$row['leto'].'" >'.$row['leto'].'</option>';
                       
                    }
                ?>
            </select><br>
                 
            <input type="submit" value="poglej" />
             </form>
             <?php
      
          if(isset($_POST['ime']) AND isset($_POST['leto'])){
          $ime = $_POST['ime'];
          $leto = $_POST['leto'];
            ?>
            <table>
                
            <th>ime (<?php echo $_POST['ime']; ?>)</th>
            <th>ocena</th>
            <th>predmet</th>
            <th>solsko leto (<?php echo $_POST['leto']; ?>)</th>
            <th>sklop</th>
                
          
         <?php 
     if(!empty($_SESSION['first_name'])){
       $query = "SELECT d.ime, o.ocena,o.id, s.leto, sk.ime_sklopa, p.ime_predmeta FROM dijaki d INNER JOIN ocene o ON o.dijak_id = d.id INNER JOIN solsko_leto s ON o.solsko_leto_id = s.id INNER JOIN sklopi sk ON o.sklop_id = sk.id INNER JOIN predmeti p ON o.predmet_id = p.id WHERE (LOWER(d.ime) = '$ime') AND (s.leto = '$leto') ORDER BY d.ime";
                    $result = mysqli_query($link, $query);
                    while ($row = mysqli_fetch_array($result)) {
                        echo'<tr>';
                        echo'<td>'.$row['ime'].'</td>';
                        echo'<td>'.$row['ocena'].'</td>';
                        echo'<td>'.$row['ime_predmeta'].'</td>';
                        echo'<td>'.$row['leto'].'</td>';
                        echo'<td>'.$row['ime_sklopa'].'</td>';
                        echo '<td>'.'<a  href="admin_delete_ocene.php?id='.$row['id'].'onclick="return confirm('.'Are you sure?'.');"">delete</a></td>';
                        echo'</tr>';
                       
                    }
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
