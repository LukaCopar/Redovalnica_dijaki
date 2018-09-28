<html lang="sl"><head>
        </head><body>
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
          background-image: url("../css/slike/background.jpg");
           background-repeat: no-repeat;
           background-size: cover;
         color: #E7DFDD;
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
           tr,table{
                
                height: 15px;
                padding: 2px;
                width: 100%;
               
            }
            .text{
                
                width: 10px;
               
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
    
    
        <div id="register">
            <table>
                
                    
        <form action="./insert_ocene.php" method="post"></form>
            <tbody><tr>
            <td class="text">
                ocena:</td><td> <input type="number" max="5" name="ocena" placeholder="ocena" required=""> 
            
            </td>
            </tr>
            
            
            <tr>
            <td class="text">
              vrsta:</td><td>  <select name="vrsta">
            
                
                <option value="pisna">pisna</option><option value="ustna">ustna</option><option value="nastop">nastop</option><option value="projekt">projekt</option>              </select>
          </td>
          </tr>
          
          
          <tr>
         <td class="text">
             ucenec:</td><td>   <select name="ucenc">
            
                
                <option value="Gasper">Gasper</option><option value="luka">luka</option><option value="rok">rok</option>             </select>
             
             </td></tr><tr>
            <td class="text">
              sklop:</td><td>  <select name="sklop">
            
                
                <option value="A">A</option><option value="B">B</option><option value="C">C</option><option value="D">D</option><option value="E">E</option><option value="F">F</option>              </select>
          </td>
          </tr>
          
          
          
          <tr>
            <td class="text">
              predmet:</td><td>  <select name="predmet">
            
                
                <option value="matematika">matematika</option><option value="slovenscina">slovenscina</option>              </select>
          </td>
          </tr>
          <tr>
            <td class="text">
              solsko leto:</td><td>  <select name="leto">
            
                
                <option value="2018">2018</option><option value="2019">2019</option><option value="2020">2020</option><option value="2021">2021</option>              </select>
          </td>
          </tr>
         
         
          
          <tr>
              <td class="text" colspan="2">
            <input type="submit" class="button" value="vnesi oceno">
            
             <button value="nazaj" class="button" onclick="location.href='../index.php';">nazaj</button></td>
            
        </tr>
        
        
                
            </tbody></table>
        </div>
            

</body></html>