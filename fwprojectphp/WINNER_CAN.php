
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
                      height: 10px;
                      width: 10px;
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
            <td><img src="cooltext126034304827176.png" style="background: transparent no-repeat top right;height: 100px;display: block;margin: 25px;margin-left: 230px;" /></td>   
        </tr>
    </table>
    
    <?php
        
        $max_count=0;
        $wc_id=0;
        
        $link=mysql_connect("localhost","root","") or die ("Connection Error:  ".mysql_error());
        mysql_select_db("epolling") or die ("Database Error:  ".mysql_error());
        
        $query="SELECT * FROM voting_result";
        $result=mysql_query($query) or die ("Query Error:  ".mysql_error());
        
        echo "<table><tr>";
        while($row=mysql_fetch_array($result))
        {
            $qry="SELECT c_id,firstname,lastname,party,photo FROM candidate_reg WHERE c_id=$row[0]";
            $res=mysql_query($qry) or die("Query Error:  ".mysql_error());
            
            $row1=mysql_fetch_array($res);
            
            if($max_count<$row[1])
                {
                    $max_count=$row[1];
                    $wc_id=$row[0];
                }
                
        }
        
        
        echo "<h1><center><strong> C_ID &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  NAME<br /><h1>";
        $qry="SELECT c_id,firstname,lastname FROM candidate_reg WHERE c_id=$wc_id";
        $res=mysql_query($qry) or die("Query Error:  ".mysql_error());
        
        $row2=mysql_fetch_array($res);
        
        echo "<h1>IN LEAD: &nbsp;&nbsp; ".$row2[0]."-".$row2[1]."&nbsp;".$row2[2]."</strong></center><br /></h1>";        
                
        $query="SELECT * FROM voting_result";
        $result=mysql_query($query) or die ("Query Error:  ".mysql_error());
        
        
        
        
        echo "<table><tr>";
        while($row=mysql_fetch_array($result))
        {
            $qry="SELECT c_id,firstname,lastname,party,photo FROM candidate_reg WHERE c_id=$row[0]";
            $res=mysql_query($qry) or die("Query Error:  ".mysql_error());
            
            $row1=mysql_fetch_array($res);
            
              echo "                        
               <td>             
                 <div class='loginbox1 radius'>
                    <div class='loginform1'>
                        <form method='post' enctype='multipart/form-data' name='form1' style='width:85%;margin-left: 1px;'>
                            <fieldset id='print' style='width: 33%;dislpay: inline-block;'>
                            
                                <legend style='font-size: 20;font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;'><span class='number'></span>Votes</legend>
        
                                <p>
                                <label for='photo'><center><img src='
                                        IMAGE_HLR.php?c_id=$row1[0]
                                    ' height='100px' width='100px' alt='wait...' /></center>                      
                                </label>
                                </p>
                                
                                <p>
                                <label for='c_id'>CANDIDATE ID:<input type='text' readonly='true' name='c_id' placeholder='CANDIDATE ID' class='radius' value= '$row1[0]'/>
                                </label>				
                                </p>
                                
                                              
                                <p>
                                <label for='firstname'>FIRST NAME:<input type='text' readonly='true' name='firstname' placeholder='FIRST NAME' class='radius' value=' $row1[1] ' />
                                </label>
                                <label for='lastname'>LAST NAME:<input type='text' readonly='true' name='lastname' placeholder='LAST NAME' class='radius' value=' $row1[2] '/>
                                </label>
                                </p>
                                
                                <p>              
                                <label for='party'>PARTY:<input type='text' readonly='true' name='party' placeholder='party' class='radius' value='$row1[3]' />
                                </label>
                                </p>   
                                
                                <p>                
                                <label for='vote'>VOTE:<input type='number' readonly='true' name='vote' placeholder='vote' class='radius' value='$row[1]' />
                                </label>
                                </p>
                                
                                   
                            </fieldset>
                        </form>
                    </div>
                </div>
            </td>
                    ";
        }
        echo "</tr></table>"
    ?>
    
        
    </body>
</html>