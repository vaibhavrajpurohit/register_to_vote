
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
        </style>
    </head>

<body>

    <table>
        <tr>
            <td><img src="./election1-2.jpg" style="width:150px;height:150px;margin-left:10px;" /></td>
            <td><img src="cooltext126034377130486.png" style="background: transparent no-repeat top right;height: 100px;display: block;margin: 25px;margin-left: 230px;" /></td>   
        </tr>
    </table>
    
       <div class="loginbox radius">
            <div class="loginform">
                <form method="post" enctype="multipart/form-data" name="form1">
                    <fieldset >
                    
                        <legend style="font-size: 20;font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;"><span class="number"></span>Your Candidate ID</legend>

                        <p>
                        <label for="c_id"><input type="text" name="c_id" placeholder="CANDIDATE ID" class="radius" size="9" onkeyup="move()"/>
                        </label>				
                        </p>
                        <script>
                        function move()
                        {
                            var letters = document.form1.c_id.value.length +1;
                            if (letters <= 9)
                                {
                                    document.form1.c_id.focus()
                                }
                            else
                                {
                                    document.form1.isbt.click()
                                }
                        }
                        </script>
                        <p>                                
                        <label for="SUBMIT"><input type="submit" value="Submit" name="isbt" class="radius mini2" />
                        </label>
	                    </p>
                        
                        </fieldset>	
                </form>
            </div>
        </div>
        
        <div class="loginbox radius">
            <div class="loginform">
                <form method="post" enctype="multipart/form-data">
                    <fieldset >
                    
                        <legend style="font-size: 20;font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;"><span class="number"></span>Question</legend>

                        
                        <?php
                        if(isset($_REQUEST['isbt']))
                        {
                        $link=mysql_connect("localhost","root","") or die("Connection Error:  ".mysql_error());
                        mysql_select_db("epolling") or die("Database Error:  ".mysql_error());
    
                        $qry="SELECT ques_id,question,c_id FROM question_ask where c_id=$_REQUEST[c_id] AND answered=0";
                        $result=mysql_query($qry) or die("Query Error:  ".mysql_error());
                        
                        $row=mysql_fetch_array($result);
                        
                        if(mysql_affected_rows()==0)       //CHECK
                        {
                            echo "No question";
                            exit();
                            //header("location:2wala page");//CHECK
                        }
                        
                        
                        mysql_free_result($result);
                        mysql_close($link);
                            
                        }
                        ?>
              
                        <p>
                        <label for="Question_ID">Ques ID:<input type="text" name="ques_id" readonly="true" placeholder="Question ID" class="radius" value="
                        <?php
                        if(isset($row))
                            {
                                echo "$row[0]";
                            }
                        
                        ?>"/>
                        </label>
                        </p>
                        
                        <p>
                        <label for="Question" >Question:<input type="text" readonly="true" name="question" placeholder="Question" class="radius" value="
                        <?php
                        if(isset($row))
                            {
                                echo "$row[1]";
                            }
                        
                        ?>"/>
                        </label>
                        </p>
                        
                        <p>
                        <label for="c_id"><input type="hidden" name="c_id" value="
                        <?php
                        if(isset($row))
                            {
                                echo "$row[2]";
                            }
                        ?>
                        "/>
                        </label>
                        </p>
                        
                        <p>
                        <label for="answer"><input type="text" name="answer" placeholder="Answer" class="radius"/>
                        </label>
                        </p>
                        
                        <p>
                        <label for="answered"><input type="hidden" name="answered" value="1" />
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
     </body>
</html>


<?php
if(isset($_REQUEST['sbt']))
{
    $link=mysql_connect("localhost","root","") or die("Connection Error:  ".mysql_error());
    mysql_select_db("epolling") or die("Database Error:  ".mysql_error());
    
    $qry="INSERT INTO candidate_ans VALUES ($_REQUEST[ques_id]+100,'$_REQUEST[answer]',$_REQUEST[c_id],$_REQUEST[ques_id])";
    $result=mysql_query($qry) or die("Query Error:  ".mysql_error());
    
    if(mysql_affected_rows()==1)
        {
            echo "Successful. ";
            $qry="UPDATE question_ask SET answered=1 where ques_id=$_REQUEST[ques_id]";
            $result=mysql_query($qry) or die("Query Error:  ".mysql_error());
            if(mysql_affected_rows()==1)
            echo "<br />Successful 2";
        }
        
    else
        {
            echo "Sorry.. TRY AGAIN.";
        }
        
   // mysql_free_result($result) or die("Memory not Released:  ".mysql_error());
    mysql_close($link) or die("Connection not Closed:  ".mysql_error());
}



?>