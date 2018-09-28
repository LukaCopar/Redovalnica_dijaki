<!DOCTYPE html>
<html lang="sl">
    <?php
    include_once '../session.php';
    include_once '../database.php';
    
        ?>
    <head>
        <
        <meta charset="UTF-8">
        <title>Vnesi oceno</title>
      
        
  <style>
            @keyframes buttons{
                
                0%{background-color: transparent;
                height: 30px;
               
                }
                100%{background-color: #4717F6;
                     border-color: #4717F6;
                     
                height: 35px;
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
         color: #E7DFDD;
                }
               

            #register{
                overflow: hidden;
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
                margin: 5px;
                
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
                width: 100%;
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
            <form action="./insert_predmeta.php" method="post">
            predmet:
                <input type="text" autofocus name="predmet" placeholder="predmet"/>
            
            <input type="submit" class="button" value="vnesi predmet"/>
                   
        </form>
            <button class="button" onclick="location.href='../admin/admin_page_2.php';"> nazaj </button>
        </div>
    </body>
</html>
