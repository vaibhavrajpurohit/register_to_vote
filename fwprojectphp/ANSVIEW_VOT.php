
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
            <td><img src="cooltext125404694461603.png" style="background: transparent no-repeat top right;height: 100px;display: block;margin: 25px;margin-left: 130px;" /></td>   
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
    
    $qry="SELECT ques_id,answered,question FROM question_ask where v_id=$_REQUEST[v_id]";
    $result=mysql_query($qry) or die("Query Error:  ".mysql_error());
    
    if(mysql_affected_rows()==0)
    {
        echo "No question asked";
    }
    
    else
    {
        $row=mysql_fetch_array($result);
        if($row[1]==0)
        {
            echo "Not Answered By Candidate.";
        }
        else
        {
        $qry="SELECT * FROM candidate_ans where ques_id=$row[0]";
        $result=mysql_query($qry) or die("Query Error:  ".mysql_error());
        $row1=mysql_fetch_array($result);
        }
    }
        
   // mysql_free_result($result) or die("Memory not Released:  ".mysql_error());
    mysql_close($link) or die("Connection not Closed:  ".mysql_error());
    
    
    
    if(isset($row) && isset($row1))
        {
        echo "<div class='loginbox radius'>
                <div class='loginform'>
                    <form method='post'>
                        <fieldset >
                        
                            <legend style='font-size: 20;font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;'><span class='number'></span>Question & Answer</legend>
                  
                            <p>
                            <label for='Question_ID'>Ques ID:<input type='text' name='ques_id' readonly='true' placeholder='Question ID' class='radius' value='$row[0]'; />
                            </label>
                            </p>
                            
                            <p>QUESTION:
                            <label for='Question'><input type='text' readonly='true' name='question' placeholder='Question' class='radius' value='$row[2]'; />
                           
                            </label>
                            </p>
                            
                            
                            <p>ANSWER:
                            <label for='answer'><input type='text' name='answer' readonly='true' placeholder='Answer' class='radius' value='$row1[1]';'/>
                            </label>
                            </p>
                               
                        </fieldset>	
                    </form>
                </div>
            </div>";  
        }   


}
?>