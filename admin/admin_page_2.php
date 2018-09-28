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
            @keyframes buttons{
                
                0%{
                height: 30px;
                
                }
                100%{background-color: #4717F6;
                     border-color: #4717F6;
                height: 35px;
                }
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
            
            .button{
                margin: 3px;
                border: 0.5px #E7DFDD solid;
                height: 30px;
                width: 100%;
                color: #E7DFDD;
                background-color: #0E0B16;

            }
            .button.unhover{
                animation-name: buttons;
                animation-duration: 0.5s;
                animation-direction: alternate;
                animation-fill-mode: forwards;
                
            }
            
            .button:hover{
                animation-name: buttons;
                animation-duration: 0.5s;
                animation-fill-mode: forwards;
                
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
        <table>
            <th>ime</th>
            <th>komanda</th>
            
            
            
            <?php
        
        
       $query = "SELECT ime_predmeta, id FROM  predmeti";
                    $result = mysqli_query($link, $query);
                    while ($row = mysqli_fetch_array($result)) {
                        echo'<tr>';
                        echo'<td>'.$row['ime_predmeta'].'</td>';
                        echo '<td>'.'<a  href="admin_delete_predmeta.php?id='.$row['id'].'onclick="return confirm('.'Are you sure?'.');"">delete</a></td>';
                        echo'</tr>';
                       
                    
     }
          
        ?>
        </table>
            <button value="Vnos predmeta" class="button" onclick="location.href='../predmeti/vnos_predmeta.php'">Vnos predmeta</button>
        </div>
    </body>
</html>
