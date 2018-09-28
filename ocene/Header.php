<!DOCTYPE html>

<html>
    <?php
    include_once '../database.php';
    include_once '../session.php';
        ?>
    <head>
        <meta charset="UTF-8">
        <title></title>
        
        <style>
            @keyframes button{
                0%{background-color: #0E0B16; }
                
                100%{background-color: #4717F6;}
                
            }
             @keyframes edit{
                0%{color: #E7DFFF; }
                
                100%{color: #107896;}
                
            }
             body {
          background-image: url("./css/slike/background.jpg");
           background-repeat: no-repeat;
           background-size: cover;
         margin: 0;
         
         position: fixed;
}

a{
    text-decoration: none;
    color: #E7DFFF;
    
}
a:hover{
   animation-name: edit;
   animation-fill-mode: forwards;
   animation-duration: 0.3s;
    
    
}

            #headerr{
                float: top;
                position: fixed;
                color: #E7DFDD;
                overflow: hidden;
                margin: 0;
                background-color: #0E0B16;
                height: 50px;
                width: 100%;

            }
            #leuu{
                margin: 0;
                float: left;
                display: inline-block;
                border-right-color: #E7DFDD;
                border-right: 0.5px solid;
                height: 100%;
                vertical-align: middle;
                font-size: 1.2vw;
                padding: 5px;
                padding-top: 10px;
            }
            #desnn{
                
                margin: 0;
                text-align: center;
                float: right;
            }
            #logoutt{
                display: inline;
                height: 100%;
                font-size: 15px;
                padding: 10px;
                border-color: transparent;
                padding: 15px;
                color: #E7DFDD;
                background: transparent;
                border-left-color: #E7DFDD;
                border-left: 0.5px solid;
                
                
                
                
            }
            #logoutt:hover{
                 animation-name: button;
                animation-duration: 0.4s;
                animation-fill-mode: forwards;
                cursor: pointer;
            }
            #admin_href{
                border-right-color: #E7DFDD;
                border-right: 0.5px solid;
                font-size: 20px;
               height: 100%;
               padding: 15px;
                
            }
        </style>
    </head>
    <body>
        
        
        
        <div id="headerr">
             
            <div id="leuu">
               <?php
               $query_header = "SELECT admin FROM dijaki WHERE id = ". $_SESSION['user_id'];
               $result = mysqli_query($link, $query_header);
               
               
               
              while($row = mysqli_fetch_array($result)){
               $admin = $row['admin'];
              }
              
     if($admin == 1){
         
         ?>
                <a id="admin_href" href="admin/admin_page.php">admin site</a>
                
                <?php
               
                }
                ?>
                
                
                
               <?php
               
               
               
               
     if(!empty($_SESSION['first_name'])){
         
         ?>
                <a href="../edit_user.php">You are logged in ass
                
                <?php
                if(isset($_SESSION['first_name'])){
                echo $_SESSION['first_name'];
                }
     }
                        ?>
                </a>
            </div>
            
            <?php
     if(!empty($_SESSION['first_name'])){
         ?>
            <div id="desnn"><button id="logoutt" onclick="location.href='../logout.php';">Log Out</button></div>
            
            
            <?php
     }
     else{
         ?>
        <div id="desnn"><button id="logoutt" onclick="location.href='../logout.php';">Log Out</button></div>
         <?php
         
     }
         ?>
            
            
        </div>
        
       
       
        
        
    </body>
</html>
