<html>
<head>
<style>
<head>
        <style type="text/css">
              .note  {
                    font-size: 20;
                    font-family:georgia, sans-serif ;
                    color: red;
              }
                
              input { 
                    font-size: 11px; 
              }
                
              body { 
                    background: rgba(255,255,255,0.1);
                    background-color:  #e8eeef;
                    color: #8a97a0;
	                font: 75% georgia, sans-serif;
	                line-height: 1.88889;
	                color: black;  
           	        margin: 0; 
            	    padding: 0;
                    margin-left: 10px;
              }
              
              fieldset {
                    margin-bottom: 30px;
                    border: none;
              }
                        
                        
              form { 
                      font-style: red;
                      width: 450px;
                      margin: 0px ;
                      margin-left: 80px;    
                      padding: 10px 20px;
                      background: #f4f7f8;
                      border-radius: 8px;
                      display:inline-block;
              }
                            
              .number {
                      background-color: #846759;
                      color: #fff;
                      height: 15px;
                      width: 15px;
                      display: inline-block;
                      font-size: 0.8em;
                      margin-right: 19px;
                      line-height: 30px;
                      text-align: center;
                      text-shadow: 0 1px 0 rgba(255,255,255,0.2);
                      border-radius: 100%;
              }
                        
              form label {
                      width:140px;
              }
                      
              .loginbox input.mini2 {
                      padding: 10px 20px;
                      font-size: 18px;
                      letter-spacing: 1px;
                      color: brown;
                      width: 440px;
                      line-height: 30px;
                      font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
                      -moz-box-shadow: 1px 1px 3px #1D3871;
                      -webkit-box-shadow: 1px 1px 3px #1D3871;
                      box-shadow: 1px 1px 3px brown;
                      cursor: pointer;
             }
          
            .loginform { 
                      margin: 4px auto; 
                      text-align:center; 
             }
             
             label {
                     display: block;
                    text-align: left;
             }


            .loginbox p { 
                      margin: 7px 0 5px 0; 
            }
            
            .loginbox input.mini { 
                      width:270px;
                      margin-left:10px; 
            }
            
            .loginbox input.mini1 { 
                      width:270px;
                      margin-left:10px; 
            }
            
            .loginbox input {
                    	padding: 12px 10px; color: #ccc;
                    	font-family: Arial, Helvetica, sans-serif; 
                        margin-top: 8px; 
                        font-size: 15px; 
                        border: 1px solid #ccc; 
                        width: 420px;  
                        outline: none;
                        color:black;
            }
            
            .radius { 
                        -moz-border-radius: 5px; 
                        -webkit-border-radius: 5px; 
                        border-radius: 5px; 
            }
            
            .radius1 { 
                        -moz-border-radius: 3px; 
                        -webkit-border-radius: 3px; 
                        border-radius: 3px; 
            } 
                /*AQUA BUTTON*/
            input[type=button].new-aqua {
                
              width: 155px;
              height: 35px;     
              background: #cde; 
              border: 2px solid #ccc; 
              border-color: #8ba2c1 #5890bf #4f93ca #768fa5; 
              font: 600 16px/1 Lucida Sans, Verdana, sans-serif; 
              color: #fff; 
              text-shadow: rgba(10, 10, 10, 0.5) 1px 2px 2px;
              text-align: center; 
              vertical-align: middle; 
              white-space: nowrap; 
              text-overflow: ellipsis; 
              overflow: hidden;
              border-radius: 16px; -moz-border-radius: 16px; -webkit-border-radius: 16px;
              box-shadow: 0 10px 16px rgba(66, 140, 240, 0.5), inset 0 -8px 12px 0 #c3834c, inset 0 -8px 0 8px #936742, inset 0 -35px 15px -10px #dc9b63;
              -moz-box-shadow: 0 10px 16px rgba(66, 140, 240, 0.5), inset 0 -8px 12px 0 #c3834c, inset 0 -8px 0 8px #936742, inset 0 -35px 15px -10px #dc9b63;
              -webkit-box-shadow: 0 10px 16px rgba(66, 140, 240, 0.5), inset 0 -8px 12px 0 #c3834c, inset 0 -8px 0 8px #936742, inset 0 -35px 15px -10px #dc9b63;
            }
            .new-aqua:hover {
              text-shadow: rgb(255, 255, 255) 0px 0px 5px;
            }
             
            
             h1 {
            	margin: 1em 0 0.5em 0;
            	color: #c3834c;
            	font-weight: normal;
            	font-family: 'Ultra', sans-serif;   
            	font-size: 36px;
            	line-height: 42px;
            	text-transform: uppercase;
            	text-shadow: 0 2px #cde, 0 3px #777;
            }  
</style>
</head>
<body>

    <table>
        <tr>
            <td><img src="./election1-2.jpg" style="width:150px;height:150px;margin-left:10px;" /></td>
            <td><br /><h1 style="height: 100px;display: inline-block;margin: 25px;margin-left: 330px;">WELCOME 
            
            <?php
                session_start();
                if(isset($_SESSION["c_id"]) )
                {
                    echo $_SESSION[c_id];
                    echo "LOLOLOLOL";
                }
                
                
                
            ?>
            
            </h1></td>   
        </tr>
    </table>
    <hr />
    
    <br /><br />
    
<div style="margin-left:340px ;color: #c3834c;
            	font-weight: normal;
            	font-family: 'Ultra', sans-serif;   
            	font-size: 36px;">    
<input type="button" class="new-aqua" value="EDIT INFO" onclick="window.location.href='CANDIDATE_EDT.php'" />
<input type="button" class="new-aqua" value="ANSWER QUES." onclick="window.location.href='ANSWER_VOT.php'" />
<input type="button" class="new-aqua" value="VIEW STATUS" onclick="window.location.href='WINNER_CAN.php'" />
<input type="button" class="new-aqua" value="CHANGE PWD." onclick="window.location.href='PASSWORD2.php'" />
</div>

</body>
</html>