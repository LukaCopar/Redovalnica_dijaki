<!DOCTYPE html>



<html>
    <?php
        include_once './session.php';
        
        ?>
    <head>
  
        <meta charset="UTF-8">
        <title>login</title>
        
        
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
            #login{
                padding: 1%;
                width: 40%;
                
                border-radius: 13px;
                text-align: center;
                vertical-align: middle;
                background-color: #0E0B16;
                margin-left: 30%;
                margin-top: 10%;
                
            }
            
            input{
                height: 15px;
                width: 80%;
                border: solid #E7DFDD 1,5px;
                border-radius: 5px;
            }
            
           
            input:focus{
                
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
        <div id="login">
        <form action="./login_check.php" method="post"><br><br>
            <input type="text" name="first_name" placeholder="ime" autofocus class="skatle"/><br><br>
            <input type="password" name="pass" placeholder="geslo" class="skatle" /><br><br>
            <input type="submit" class="button" value="Log In"/>
            
        </form>
            
            
        <button class="button" onclick="location.href='vnos_ucenca.php';">Register</button>
        </div>
        
        
        
        
        <?php
           
        ?>
    </body>
</html>
