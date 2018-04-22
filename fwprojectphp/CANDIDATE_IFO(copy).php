
<html>
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
	                color: #555753;  
           	        margin: 0; 
            	    padding: 0;
                    margin-left: 10px;
              }
              
              fieldset {
                    margin-bottom: 30px;
                    border: none;
                    width: 450px;
              }
              #print fieldset {
                    margin-bottom: 30px;
                    border: none;
                    width: 400px;
                      margin: 0px ;
                      margin-left: 10px;    
                      padding: 10px 20px;
                      background: #f4f7f8;
                      border-radius: 8px;
                      position: relative;
                      
               }
                        
                        
             form  { 
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
                      height: 30px;
                      width: 30px;
                      display: inline-block;
                      font-size: 0.8em;
                      margin-right: 4px;
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
             
             .loginform1 {
                    margin: 4px auto;
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
            
            .loginbox1 input {
                    	padding: 12px 10px; color: #ccc;
                    	font-family: Arial, Helvetica, sans-serif; 
                        margin-top: 8px; 
                        font-size: 15px; 
                        border: 1px solid #ccc; 
                        width: 320px;  
                        outline: none;
                        color:black;
                        text-align: left;
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
        </style>
    </head>

<body>

    <table>
        <tr>
            <td><img src="./election1-2.jpg" style="width:150px;height:150px;margin-left:10px;" /></td>
            <td><img src="cooltext126034749656096.png" style="background: transparent no-repeat top right;height: 100px;display: block;margin: 25px;margin-left: 130px;" /></td>   
        </tr>
    </table>
    
        <div class="loginbox radius">
            <div class="loginform">
                <form method="post" enctype="multipart/form-data">
                    <fieldset>
                    
                        <legend style="font-size: 20;font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;"><span class="number"></span>Select Candidate</legend>

                        <p>
                        <label for="sel_candidate">
                        <select name="sel_candidate" class="radius1" style="width:418px; height: 40px; font-size:12px"  tabindex="7" >
                        <option value="-1">Select Candidate</option>
                        <?php
                        $link=mysql_connect("localhost","root","") or die("Connection Error:  ".mysql_error());
                        mysql_select_db("epolling") or die("Database Error:  ".mysql_error());
    
                        $qry="SELECT * FROM candidate_reg ";
                        $result=mysql_query($qry) or die("Query Error:  ".mysql_error());
                        
                        while($row=mysql_fetch_array($result))
                        {
                            echo "<option value=$row[0]>$row[1] $row[2]</option>";
                        }
                        
                        //mysql_free_result($result);
                        mysql_close($link);
                        
                        ?>
                        </label>				
                        </p>
                      
                        <p>                                
                        <label for="SUBMIT"><input type="submit" value="Submit" name="isbt" class="radius mini2" />
                        </label>
	                    </p>
                        
                        </fieldset>	
                </form>
            </div>
        </div>
                        
                        <?php
                        if(isset($_REQUEST['isbt']))
                        {
                        $link=mysql_connect("localhost","root","") or die("Connection Error:  ".mysql_error());
                        mysql_select_db("epolling") or die("Database Error:  ".mysql_error());
    
                        $qry="SELECT * FROM candidate_reg where c_id=$_REQUEST[sel_candidate]";
                        $result=mysql_query($qry) or die("Query Error:  ".mysql_error());
                        
                        $row=mysql_fetch_array($result);
                        
                        mysql_free_result($result);
        
                        $qry="SELECT s_name FROM state_master where s_id=$row[5]";
                        $result=mysql_query($qry) or die('Query Error:  '.mysql_error());
                            
                        $row1=mysql_fetch_array($result);
                        
                        mysql_free_result($result);
                        mysql_close($link);
                        
                        
                        
   echo " <br />
                        
       <table><tr> 
       <td>             
         <div class='loginbox1 radius'>
            <div class='loginform1'>
                <form method='post' enctype='multipart/form-data' name='form1' style='width:90%;margin-left: 1px;'>
                    <fieldset id='print' style='width: 33%;dislpay: inline-block;'>
                    
                        <legend style='font-size: 20;font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;'><span class='number'>1</span>Basic info</legend>

                        <p>
                        <label for='photo'><center><img src='
                                IMAGE_HLR.php?c_id=$row[0]
                            ' height='100px' width='100px' alt='wait...' /></center>                      
                        </label>
                        </p>
                        
                        <p>
                        <label for='c_id'>CANDIDATE ID:<input type='text' readonly='true' name='c_id' placeholder='CANDIDATE ID' class='radius' value= '$row[0]'/>
                        </label>				
                        </p>
                        
                        <p>
                        <label for='v_id'>VOTER ID:<input type='number' readonly='true' name='v_id' placeholder='Voter ID' class='radius' value='$row[15]' />
                        </label>
                        </p>
                                      
                        <p>
                        <label for='firstname'>FIRST NAME:<input type='text' readonly='true' name='firstname' placeholder='FIRST NAME' class='radius' value=' $row[1] ' />
                        </label>
                        <label for='lastname'>LAST NAME:<input type='text' readonly='true' name='lastname' placeholder='LAST NAME' class='radius' value=' $row[2] '/>
                        </label>
                        </p>
                        
                        <p>              
                        <label for='fathername'>FATHER NAME:<input type='text' readonly='true' name='fathername' placeholder='FATHER NAME' class='radius' value='$row[3]' />
                        </label>
                        </p>   
                        
                        <p>                
                        <label for='dob'>DOB:<input type='date' readonly='true' name='dob' placeholder='DATE OF BIRTH' class='radius' value='$row[4]' />
                        </label>
                        </p>
                        
                           
                    </fieldset>
                </form>
            </div>
        </div>
        </td>
        
                        
        
        <td>
        <div class='loginbox1 radius'>
            <div class='loginform1'>
                <form method='post' enctype='multipart/form-data' name='form1' style='width:90%;margin-left: 10px;'>
                    <fieldset id='print' style='width:33%;dislpay: inline-block;'>
                    
                        <legend style='font-size: 20;font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;'><span class='number'>2</span>Address</legend>

                        <p>
                        <label for='address'>ADDRESS:<input type='text' readonly='true' name='address' class='radius' placeholder='Address' value='$row[10]' />
                        </label>
                        </p>
                        
                        <p>
                        <label for='city'>CITY:<input type='text' readonly='true' name='city' placeholder='City' class='radius' value='$row[6]' />
                        </label>
                        </p>
                        
                        <p>             
                        <label for='state' >STATE:
                        <input type='text' readonly='true' name='state' class='radius' value='$row1[0]' />
                        </label>
                        </p>
                        
                        <p>                
                        <label for='contact_no'><input type='text' readonly='true' name='contact_no' placeholder='Contact No.' class='radius' value='$row[11]' />
                        </label>
                        </p>

                    </fieldset>
                </form>
            </div>
        </div>
        </td>

       <td>
        <div class='loginbox1 radius'>
            <div class='loginform1'>
                <form method='post' enctype='multipart/form-data' name='form1' style=' width:425px;margin-left: 10px;'>
                    <fieldset id='print' style='width:33%;dislpay: inline-block;'>
                        
                        <legend style='font-size: 20;font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;'><span class='number'>3</span>Party & Login Credentails</legend>

                        <p>
                        <label for='party'>PARTY:<input type='text' readonly='true' name='party' placeholder='Party' class='radius' value='$row[7]' />
                        </label>
                        </p>
                                        
                        <p>
                        <label for='email'>E-MAIL:<input type='email' readonly='true' name='email' placeholder='E mail' class='radius' value='$row[9]' />
                        </label>
                        </p>
                        
                        <p>
                        <label for='user_name'>USER-NAME<input type='text' readonly='true' name='user_name' placeholder='User-name' class='radius' value='$row[12]' />
                        </label>
                        </p>
                        
                        <p>
                        <label for='password'>PASSWORD<input type='password' readonly='true' name='password' placeholder='New Password' class='radius' value='$row[13]' />
                        </label>
                        </p>
                        
                        <p>
                        <label for='election_reason'>ELECTION REASON:<input type='text' readonly='true' name='election_reason' placeholder='Election Reason' class='radius' value='$row[14]' />
                        </label>
                        </p>
                        
                        <p>
                        <label for='approved'><input type='hidden' name='approved' value='$row[16]' />
                        </label>
                        </p>
                           
                    </fieldset>
                   	
                </form>
            </div>
        </div>
        </td>
        </tr>
        </table>";
        }
                        ?>
     </body>
</html>




<?php

/**
 * @author gencyolcu
 * @copyright 2015
 */



?>