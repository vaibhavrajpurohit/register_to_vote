
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
            <td><img src="./election1-2.jpg" style="width:150px;height:150px;margin-left:10px;" /></td>
            <td><img src="cooltext126034596351181.png" style="background: transparent no-repeat top right;height: 100px;display: block;margin: 25px;margin-left: 230px;" /></td>   
        </tr>
    </table>
    
        <div class="loginbox radius">
            <div class="loginform">
                <form method="post" enctype="multipart/form-data">

                    <fieldset>
                        
                        <legend style="font-size: 20;font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;"><span class="number"></span>Questions to be asked</legend>
                        
                        <p>
                        <label for="voter_id"><input type="text" name="v_id" placeholder="Voter ID" class="radius"/>
                        </label>
                        </p>
                        
                         
                        <p>                                
                        <label for="SUBMIT"><input type="submit" value="Submit" name="isbt" class="radius mini2" />
                        </label>
	                    </p>
                           

                        <?php
                            if(isset($_REQUEST['isbt']))
                            {
                                $vid=$_REQUEST['v_id'];
                                
                                $link=mysql_connect("localhost","root","") or die("Connection Error:  ".mysql_error());
                                mysql_select_db("epolling") or die("Database Error:  ".mysql_error());
                                
                                $qry="SELECT * FROM voter_reg WHERE voter_id=$vid AND check_vote=0";
                                $result=mysql_query($qry) or die("Query Error:  ".mysql_error());
                                
                                if(mysql_affected_rows()==1)
                                    {   
                                        $qry="UPDATE voter_reg SET check_vote=1 where voter_id=$vid";
                                        $result=mysql_query($qry) or die("Query Error:  ".mysql_error());
                                        
                                        $qry="SELECT c_id,firstname,lastname FROM candidate_reg";
                                        $result=mysql_query($qry) or die("Query Error:  ".mysql_error());
                                        
                                        echo "   <p>
                                                 <label for='candidate' >
                                                 <select name='c_id' class='radius1' style='width:418px; height: 40px; font-size:12px' tabindex='7'>
                                                 <option value='-1'>Select Candidate</option>";
                                                                    
                                                 while($row=mysql_fetch_array($result))
                                                 {
                                                        echo "<option value=$row[0]>$row[1] $row[2]</option>";
                                                 }
                                                            
                                        echo "  </label>
                                                </p>
                                                
                                                <p>                                
                                                    <label for='SUBMIT'><input type='submit' value='Submit' name='sbt' class='radius mini2' />
                                                    </label>
   	                                            </p> ";
                                    }
                                else
                                    {
                                        echo "Sorry.. TRY AGAIN.";
                                        exit();
                                    }
                                    
                               //mysql_free_result($result) or die("Memory not Released:  ".mysql_error());
                                mysql_close($link) or die("Connection not Closed:  ".mysql_error());
                            }
                        
                        

if(isset($_REQUEST['sbt']))
{
    $cid=@$_REQUEST[c_id];
    
    $link=mysql_connect("localhost","root","") or die("Connection Error:  ".mysql_error());
    mysql_select_db("epolling") or die("Database Error:  ".mysql_error());
    
    
    $qry="UPDATE voting_result SET vote_result=vote_result+1 WHERE c_id=$cid";
    $result=mysql_query($qry) or die("Query Error:  ".mysql_error());
    
    if(mysql_affected_rows()==1)
        {
            echo "Successfully Voted ";
        }
        
    else
        {
            echo "Sorry.. Error in VOTING";
        }
        
   // mysql_free_result($result) or die("Memory not Released:  ".mysql_error());
    mysql_close($link) or die("Connection not Closed:  ".mysql_error());
}



?>

                   </fieldset>	
                </form>
            </div>
        </div>
    </body>
</html>