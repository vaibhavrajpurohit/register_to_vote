
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
              }
                        
                        
              form { 
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
        </style>
    </head>
    <body>
        <table>
            <tr>
                <td><img src="./election1-2.jpg" style="width:150px;height:150px;margin-left:50px;" /></td>
                <td><img src="cooltext125402359944818.png" style="background: transparent no-repeat top right;height: 100px;display: block;margin: 25px;margin-left: 165px;" /></td>   
            </tr>
        </table>
        

        <div class="loginbox radius">
            <div class="loginform">
                <form method="post" enctype="multipart/form-data">
                    <fieldset >
                    
                        <legend style="font-size: 20;font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;"><span class="number">1</span>Your basic info</legend>

                        <p>
                        <label for="voter_id"><input type="number" name="voter_id" placeholder="Voter ID" class="radius"/>
                        </label>
                        </p>
                                      
                        <p>
                        <label for="first_name"><input type="text" name="first_name" placeholder="FIRST NAME" class="radius" />
                        </label>
                        <label for="last_name"><input type="text" name="last_name" placeholder="LAST NAME" class="radius"/>
                        </label>
                        </p>
                        
                        <p>              
                        <label for="father_name"><input type="text" name="father_name" placeholder="FATHER NAME" class="radius"/>
                        </label>
                        </p>   
                        
                        <p>                
                        <label for="d_o_b"><input type="date" name="d_o_b" placeholder="DATE OF BIRTH" class="radius"/>
                        </label>
                        </p>
                        
                        <p>
                        <label for="v_photo"><input type="file" name="v_photo" class="radius" style="opacity:0.9;background-color:#846759" onchange="javascript: document.getElementById ('fileName') . value = this.value" />
                        </label>
                        </p>
                        
                        <p>
                        <label for="v_ids"><input type="text" name="v_ids" placeholder="Verification ID" class="radius"/>
                        </label>
                        </p>
                           
                    </fieldset>

                    <fieldset>
                        <legend style="font-size: 20;font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;"><span class="number">2</span>Address</legend>

                        <p>
                        <label for="address"><input type="text" name="address" class="radius" placeholder="Address"></textarea>
                        </label>
                        </p>
                        
                        <p>
                        <label for="city"><input type="text" name="city" placeholder="City" class="radius"/>
                        </label>
                        </p>
                        
                        <p>             
                        <label for="state" >
                        <select name="state" class="radius1" style="width:418px; height: 40px; font-size:12px"  tabindex="7">
                 	          <option value="-1">Select State</option>
                              <option value="38" >Abroad</option>
                              <option value="1" >Andaman and Nicobar Islands</option>
                              <option value="2" >Andhra Pradesh</option>
                              <option value="3" >Arunachal Pradesh</option>
                              <option value="4" >Assam</option>
                                          <option value="5" >Bihar</option>
                                          <option value="6" >Chandigarh</option>
                                          <option value="7" >Chhattisgarh</option>
                                          <option value="8" >Dadra and Nagar Haveli</option>
                                          <option value="9" >Daman and Diu</option>
                                          <option value="10" >New Delhi (National Capital)</option>
                                          <option value="11" >Goa</option>
                                          <option value="12" >Gujarat</option>
                                          <option value="13" >Haryana</option>
                                          <option value="14" >Himachal Pradesh</option>
                                          <option value="15" >Jammu and Kashmir</option>
                                          <option value="16" >Jharkhand</option>
                                          <option value="17" >Karnataka</option>
                                          <option value="18" >Kerala</option>
                                          <option value="19" >Lakshadweep</option>
                                          <option value="20" >Madhya Pradesh</option>
                                          <option value="21" >Maharashtra</option>
                                          <option value="22" >Manipur</option>
                                          <option value="23" >Meghalaya</option>
                                          <option value="24" >Mizoram</option>
                                          <option value="25" >Nagaland</option>
                                          <option value="26" >Orissa</option>
                                          <option value="27" >Puducherry </option>
                                          <option value="28" >Punjab</option>
                                          <option value="29" >Rajasthan</option>
                                          <option value="30" >Sikkim</option>
                                          <option value="31" >Tamil Nadu</option>
                            	          <option value="32" >Telangana</option>
                            	          <option value="33" >Tripura</option>
                            	          <option value="34" >Uttar Pradesh</option>
                            	          <option value="35" >Uttarakhand</option>              
                            	          <option value="36" >West Bengal</option>
                        </select>
                        </label>
                        </p>
                        
                        <p>
                        <label for="pin_code"><input type="text" name="pin_code" placeholder="PINCODE" class="radius"/>
                        </label>
                        </p>
                        
                        <p>                
                        <label for="contact_no"><input type="text" name="contact_no" placeholder="Contact No." class="radius"/>
                        </label>
                        </p>

                    </fieldset>

                    <fieldset>
                        
                        <legend style="font-size: 20;font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;"><span class="number">3</span>Login Credentails</legend>
                        
                        <p>
                        <label for="user_name"><input type="text" name="user_name" placeholder="User-name" class="radius"/>
                        </label>
                        </p>
                        
                        <p>
                        <label for="password"><input type="password" name="password" placeholder="New Password" class="radius"/>
                        </label>
                        </p>
                        
                        <p>
                        <label for="role"><input type="hidden" name="role" value="voter"/>
                        </label>
                        </p>
                        
                        <p>
                        <label for="approve"><input type="hidden" name="approve" value="0" />
                        </label>
                        </p>
                         
                        <p>                                
                        <label for="SUBMIT"><input type="submit" value="Submit" name="sbt" class="radius mini2" />
                        </label>
	                    </p>
                           
                    </fieldset>	
                </form>
            </div>
        </div>
       
       <p  align="center" class="note">   Note: Please make sure your details are complete & correctly filled before submitting form...!!!</p>      
            
    </body>
</html>

<?php
if(isset($_REQUEST['sbt']))
{
    $link=mysql_connect("localhost","root","") or die("Connection Error:  ".mysql_error());
    mysql_select_db("epolling") or die("Database Error:  ".mysql_error());
   // echo $isize." <br /> ".$itmp." <br /> ".$isize."<br /> ";
    
    if($_FILES['v_photo']['error']==0)
        {
            $isize=$_FILES['v_photo']['size'];
            $itmp=$_FILES['v_photo']['tmp_name'];
            $isize=$_FILES['v_photo']['size'];
            echo $isize." <br /> ".$itmp." <br /> ".$isize."<br /> ";
            $bfil=fopen($itmp,"r");
            $file=fread($bfil,$isize);
            $img=addslashes($file);
        }
        
    else
        {
            echo $_FILES['v_photo']['error'];
            $img=NULL;
        }
    
    $qry="INSERT INTO voter_reg VALUES ($_REQUEST[voter_id],'$_REQUEST[first_name]','$_REQUEST[last_name]','$_REQUEST[father_name]','$_REQUEST[d_o_b]','$_REQUEST[state]','$_REQUEST[city]','$_REQUEST[address]','$_REQUEST[e_mail]',$_REQUEST[contact_no],$_REQUEST[pin_code],'$_REQUEST[user_name]','$_REQUEST[password]','$_REQUEST[role]','$img','$_REQUEST[v_ids]',$_REQUEST[approve])";
    $result=mysql_query($qry) or die("Query Error:  ".mysql_error());
    
    if(mysql_affected_rows()==1)
        {
            echo "Thanks For REGISTARTION. Every vote is Important, so make sure you VOTE";
        }
        
    else
        {
            echo "Sorry.. REGISTRATION not successful.. TRY AGAIN.";
        }
   
   // mysql_free_result($result) or die("Memory not Released:  ".mysql_error());
    mysql_close($link) or die("Connection not Closed:  ".mysql_error());
}


?>