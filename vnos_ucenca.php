<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <?php
    include_once './session.php';
    include_once './database.php';
    
        ?>
    <head>
        <meta charset="UTF-8">
        <title>register</title>
        <script>
        function checkPass()
    var pass1 = document.getElementById('pass1');
    var pass2 = document.getElementById('pass2');
    var goodColor = "#66cc66";
    var badColor = "#ff6666";
    var mehColor = "#ffffff";
    if(pass1.value == pass2.value && pass2.value == ""){
       pass2.style.backgroundColor = mehColor;
    }
    else if(pass1.value == pass2.value){
        pass2.style.backgroundColor = goodColor;
        
        
    }
    else{
        pass2.style.backgroundColor = badColor;
        
    }
    
}  
        
        </script>
        
  <style>
            @keyframes buttons{
                
                0%{background-color: transparent;
                height: 30px;
                width: 20%;
                }
                100%{background-color: #4717F6;
                     border-color: #4717F6;
                     
                height: 35px;
                width: 23%;
                }
            }
            @keyframes inputs{
                
                0%{height: 15px;}
                100%{height: 20px;}
            }
            body {
          background-image: url("./css/slike/background.jpg");
           background-repeat: no-repeat;
           background-size: cover;
         
}
            #register{
                padding: 1%;
                width: 30%;
                border-radius: 13px;
                text-align: center;
                vertical-align: middle;
                background-color: #0E0B16;
                margin-left: 35%;
                margin-top: 10%;
                
            }
            
            input{
                height: 15px;
                width: 80%;
                border: solid #E7DFDD 1,5px;
                border-radius: 5px;
            }
            select{
                height: 17px;
                width: 80%;
                border: solid #E7DFDD 1,5px;
                border-radius: 5px;
                
            }
            
           
            input:focus, select:focus{
                
                animation-name: inputs;
                animation-duration: 0.8s;
                animation-fill-mode: forwards;
            }
            .button{
                margin: 3px;
                border: 0.5px #E7DFDD solid;
                height: 30px;
                width: 20%;
                color: #E7DFDD;
                background-color: transparent;

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
            
            
        </style>
    </head>
    <body>
        <div id="register">
        <form action="./insert_ucenca.php" method="post">
            
            <input type="text" name="ime" placeholder="ime" required/><br><br>
            <input type="text" name="priimek" placeholder="priimek" required/><br><br>
            <input type="number" name="leto_roj" placeholder="leto_rojstva" required/><br><br>
            <input type="password" name="pass" id="pass1" placeholder="password" required required onkeyup="checkPass(); return false;"/><br><br>
            <input type="password" name="pass2" id="pass2" placeholder="repeat password" required onkeyup="checkPass(); return false;"/><br><br>
            <select name="razred">
            
                
                <?php
                    $query = "SELECT ime FROM `razredi`";
                    $result = mysqli_query($link, $query);
                    while ($row = mysqli_fetch_array($result)) {
                        echo '<option value="'.$row['ime'].'" >'.$row['ime'].'</option>';
                       
                    }
                ?>
            </select><br>
            <input type="submit" class="button" value="register"/>
        </form>
            <button class="button" onclick="location.href='login.php';">Log In</button>
        </div>
        <?php
        
        ?>
    </body>
</html>
