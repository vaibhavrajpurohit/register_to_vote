<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
		
    <style type="text/css">
    
                    
                a:link {
                text-decoration: none;
                }
                
                /* visited link */
                a:visited {
                    color: black;
                }
                
                /* mouse over link */
                a:hover {
                    color: black;
                }
                
                /* selected link */
                a:active {
                    color: black;
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
            
                #header-main-right {
                	float: right;
                	height: 68px;
                	position: relative;
                	top:5px;
                }
                
                #header-main-right-nav {
                	padding: 4px 6px 4px 4px;
                	position: absolute;
                	right: 0;
                    
                }
                
                #div1{
                    overflow:scroll; 
                    height:50%; 
                    width:50%; 
                    margin-left: 880px; 
                    display: inline-block;
                }
                
                #login_form .inputtext {
                	background-color: #FFFFFF;
                	height:16px;
                	font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
                	font-size: 13px;
                	margin: 0;
                	padding: 5px 8px 5px 8px;
                	width: 166px;
                	border:1px solid #3A518A;
                }   
        
                #login_form .inputtext:hover {
                	border-color: #A0A0A0 #B9B9B9 #B9B9B9;
                	border-image: none;
                	border-style: solid;
                	border-width: 1px;
                	box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1) inset;
                }
    
                .loginform { 
                    margin: 4px auto; 
                    text-align:center; 
                }
        
                #login_form table tr td {
            	   padding: 0 0 0 5px;
                }
    
                #login_form table tr td label {
                	color: #fff;
                	cursor: pointer;
                	font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
                	font-size: 12px;
                	font-weight: normal;
                	padding-left: 1px;
                	text-align: left;
                	vertical-align: middle;
                }
    
        
    
                button, input { font-size: 11px; }
                .loginbox { width: auto; margin: 10px; }
               	.loginbox input { width: 95%; }
               	.loginbox button { width: 100%; }
                
                a    { text-decoration: none; }
                p    { text-align: center; }
                sup  { 
                    font-size: 36px; 
                    font-weight: 100; 
                    line-height: 55px; 
                }
        
                .button { 
                    border:1px solid #1D3871; 
                    width:94px; 
                    background-image:-webkit-linear-gradient(top, brown, brown); 
                    font-size:14px; 
                    line-height:25px; 
                    font-weight:normal; 
                    color:#fff; 
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

	<link rel="stylesheet" type="text/css" href="sliderengine/engine1/style.css" />
	<script type="text/javascript" src="sliderengine/engine1/jquery.js"></script>
    <script>
        
		(function($){
			$.fn.styleddropdown = function(){
				return this.each(function(){
					var obj = $(this)
					obj.find('.field').click(function() { //onclick event, 'list' fadein
					obj.find('.list').fadeIn(400);

					$(document).keyup(function(event) { //keypress event, fadeout on 'escape'
						if(event.keyCode == 27) {
						obj.find('.list').fadeOut(400);
						}
					});

					obj.find('.list').hover(function(){ },
						function(){
							$(this).fadeOut(400);
						});
					});

					obj.find('.list li').click(function() { //onclick event, change field value with selected 'list' item and fadeout 'list'
					obj.find('.field')
						.val($(this).html())
						.css({
							'background':'#fff',
							'color':'#333'
						});
					obj.find('.list').fadeOut(400);
					});
				});
			};
		})(jQuery);

		$(function(){
			$('.size').styleddropdown();
		});
    
    </script>
    
    
</head>
<body>
    
    <div id="header-main-right">
      <div id="header-main-right-nav">
        <form method="post" action="" id="login_form" >
          <label>
          <table border="0" style="border:none">
            <tr>
              <td ><input type="text" tabindex="1"  id="email" placeholder="User-name" name="username" class="inputtext radius1" value="" /></td>
              <td ><input type="password" tabindex="2" id="pass" placeholder="Password" name="password" class="inputtext radius1" /></td>
              <td ><input type="submit" class="button" name="login" id="loginbutton" value="Login" /></td>
            </tr>
          </table>
          </label>
        </form>
      </div>
    </div>
    
    
	<br /><br /><br /><br />
    
    <fieldset style="border:none; alignment-adjust: middle;">
	   <div id="wowslider-container1">
	       <div class="ws_images">
                <ul>
                    <li><img src="sliderengine/data1/images/3117968.jpg" alt="" title="" id="wows1_0"/></li>
                    <li><img src="sliderengine/data1/images/generalelection2015.jpg" alt="" title="" id="wows1_1"/></li>
                    <li><img src="sliderengine/data1/images/vote1.jpg" alt="" title="" id="wows1_2"/></li>
                    <li><img src="sliderengine/data1/images/485003.jpg" alt="" title="" id="wows1_3"/></li>
                    <li><img src="sliderengine/data1/images/images.jpg" alt="" title="" id="wows1_4"/></li>
                </ul>
    </div>
    
    
    <div class="ws_bullets">
        <div>
            <a href="#" title=""><img src="sliderengine/data1/tooltips/3117968.jpg" alt=""/>1</a>
            <a href="#" title=""><img src="sliderengine/data1/tooltips/generalelection2015.jpg" alt=""/>2</a>
            <a href="#" title=""><img src="sliderengine/data1/tooltips/vote1.jpg" alt=""/>3</a>
            <a href="#" title=""><img src="sliderengine/data1/tooltips/485003.jpg" alt=""/>4</a>
            <a href="#" title=""><img src="sliderengine/data1/tooltips/images.jpg" alt=""/>5</a>
        </div>
    </div>
	
    <div class="ws_shadow"></div>
	</div>
    
	<script type="text/javascript" src="sliderengine/engine1/wowslider.js"></script>
	<script type="text/javascript" src="sliderengine/engine1/script.js"></script>
    
    </fieldset>
    <style>
    ::selection {
                    background: transparent; 
                }
                
                ::-moz-selection {
                    background: transparent; 
                }
                
                .wrapper-demo {
                    margin: 60px 0 0 0;
                    *zoom: 1;
                    font-weight: 400;
                }
                
                .wrapper-demo:after {
                    clear: both;
                    content: "";
                    display: table;
                }
                
                .wrapper-dropdown-5 {
                    /* Size & position */
                    position: relative;
                    width: 200px;
                    margin: 0 auto;
                    padding: 12px 15px;
                
                    /* Styles */
                    background: #fff;
                    border-radius: 5px;
                    box-shadow: 0 1px 0 rgba(0,0,0,0.2);
                    cursor: pointer;
                    outline: none;
                    -webkit-transition: all 0.3s ease-out;
                    -moz-transition: all 0.3s ease-out;
                    -ms-transition: all 0.3s ease-out;
                    -o-transition: all 0.3s ease-out;
                    transition: all 0.3s ease-out;
                }
                
                .wrapper-dropdown-5:after { /* Little arrow */
                    content: "";
                    width: 0;
                    height: 0;
                    position: absolute;
                    top: 50%;
                    right: 15px;
                    margin-top: -3px;
                    border-width: 6px 6px 0 6px;
                    border-style: solid;
                    border-color: #4cbeff transparent;
                }
                .wrapper-dropdown-5 span{
                    display: inline-block;
                  position: relative;
                  padding-right: 0;
                  transition: padding-right 0.5s;
                    
                }
                
                .wrapper-dropdown-5:hover span, .wrapper-dropdown-5:active span 
                {
                  padding-right: 30px;
                }
                
                .wrapper-dropdown-5:hover span:after, .wrapper-dropdown-5:active span:after //ARROW EFFECT//
                {
                  transition: opacity 0.5s, top 0.5s, right 0.5s;
                  opacity: 1;
                  border-color: brown;
                  right: 0;
                  top: 50%;
                }
                
                .wrapper-dropdown-5 .dropdown {
                    /* Size & position */
                    position: absolute;
                    top: 100%;
                    left: 0;
                    right: 0;
                
                    /* Styles */
                    background: #fff;
                    border-radius: 0 0 5px 5px;
                    border: 1px solid rgba(0,0,0,0.2);
                    border-top: none;
                    border-bottom: none;
                    list-style: none;
                    -webkit-transition: all 0.3s ease-out;
                    -moz-transition: all 0.3s ease-out;
                    -ms-transition: all 0.3s ease-out;
                    -o-transition: all 0.3s ease-out;
                    transition: all 0.3s ease-out;
                
                    /* Hiding */
                    max-height: 0;
                    overflow: hidden;
                }
                
                .wrapper-dropdown-5 .dropdown li {
                    padding: 0 10px ;
                }
                
                .wrapper-dropdown-5 .dropdown li a {
                    display: block;
                    text-decoration: none;
                    color: #333;
                    padding: 10px 0;
                    transition: all 0.3s ease-out;
                    border-bottom: 1px solid #e6e8ea;
                }
                
                .wrapper-dropdown-5 .dropdown li:last-of-type a {
                    border: none;
                }
                
                .wrapper-dropdown-5 .dropdown li i {
                    margin-right: 5px;
                    color: inherit;
                    vertical-align: middle;
                }
                
                /* Hover state & ACTIVE STATE */
                
                .wrapper-dropdown-5 .dropdown li:hover a, .wrapper-dropdown-5.active {
                    color: #57a9d9;
                    border-radius: 5px 5px 0 0;
                    background: #4cbeff;
                    box-shadow: none;
                    border-bottom: none;
                    color: white;
                }
                
                .wrapper-dropdown-5.active .dropdown {
                    border-bottom: 1px solid rgba(0,0,0,0.2);
                    max-height: 400px;
                }

        
    </style>


    	<section class="main">
            <fieldset style="border:none;">
				<div class="wrapper-demo" style="margin-left: 250px; display: inline-block;">
					<div id="dd" class="wrapper-dropdown-5" tabindex="1"><font size="3px">SIGN UP</font>
						<ul class="dropdown">
							<li><a href="VOTER_REG.php"><i class="icon-user"></i><font size="px">as VOTER</font></a></li>
							<li><a href="CANDIDATE_REG.php"><i class="icon-cog"></i><font size="2.5px">as CANDIDATE</a></font></li>
						</ul>
					</div>
				</div>
			
				<div class="wrapper-demo"  style="margin-left: 160px; display: inline-block;">
					<div id="dd" class="wrapper-dropdown-5" tabindex="1"><a href="CANDIDATE_IFO(copy).php"  >
                    <font size="3px">View Candidates</font></a>
                                
						<ul class="dropdown"></ul>
					</div>
				</div>
                </fieldset>
			</section>
		
		
		<!-- jQuery if needed -->
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<script type="text/javascript">

			function DropDown(el) {
				this.dd = el;
				this.initEvents();
			}
			DropDown.prototype = {
				initEvents : function() {
					var obj = this;

					obj.dd.on('click', function(event){
						$(this).toggleClass('active');
						event.stopPropagation();
					});	
				}
			}

			$(function() {

				var dd = new DropDown( $('#dd') );

				$(document).click(function() {
					// all dropdowns
					$('.wrapper-dropdown-5').removeClass('active');
				});

			});

		</script>        
        
        
        <style>
        .me {
  width: 400px;
  margin: 90px auto;
}
.me p,
.me h1 {
  text-transform: uppercase;
  letter-spacing: 3px;
  text-align: center;
}
.me p {
  font-weight: 200;
}
.me span {
  font-weight: bold;
}
.social {
  position: fixed;
  top: 20px;
}
.social ul {
  padding: 0px;
  -webkit-transform: translate(-270px, 0);
  -moz-transform: translate(-270px, 0);
  -ms-transform: translate(-270px, 0);
  -o-transform: translate(-270px, 0);
  transform: translate(-270px, 0);
}
.social ul li {
  display: block;
  margin: 5px;
  background: rgba(0, 0, 0, 0.36);
  width: 300px;
  text-align: right;
  padding: 10px;
  -webkit-border-radius: 0 30px 30px 0;
  -moz-border-radius: 0 30px 30px 0;
  border-radius: 0 30px 30px 0;
  -webkit-transition: all 1s;
  -moz-transition: all 1s;
  -ms-transition: all 1s;
  -o-transition: all 1s;
  transition: all 1s;
}
.social ul li:hover {
  -webkit-transform: translate(110px, 0);
  -moz-transform: translate(110px, 0);
  -ms-transform: translate(110px, 0);
  -o-transform: translate(110px, 0);
  transform: translate(110px, 0);
  background: rgba(255, 255, 255, 0.4);
}
.social ul li:hover a {
  color: #4cbeff;
}
.social ul li:hover i {
  color: brown;
  background: rgba(0, 0, 0, 0.36);
  -webkit-transform: rotate(360deg);
  -moz-transform: rotate(360deg);
  -ms-transform: rotate(360deg);
  -o-transform: rotate(360deg);
  transform: rotate(360deg);
  -webkit-transition: all 1s;
  -moz-transition: all 1s;
  -ms-transition: all 1s;
  -o-transition: all 1s;
  transition: all 1s;
}
.social ul li i {
  margin-left: 10px;
  color: #000;
  background: brown;
  padding: 10px;
  -webkit-border-radius: 50%;
  -moz-border-radius: 50%;
  border-radius: 50%;
  width: 20px;
  height: 20px;
  font-size: 20px;
  background: brown;
  -webkit-transform: rotate(0deg);
  -moz-transform: rotate(0deg);
  -ms-transform: rotate(0deg);
  -o-transform: rotate(0deg);
  transform: rotate(0deg);
}
    
    </style>
    
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,200' rel='stylesheet' type='text/css'> 
  
  <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<nav class="social">
    <span>FOLLOW US:</span>
          <ul>
              <li><a href="http://twitter.com/gian_michelle">Twitter <i class="fa fa-twitter"></i></a></li>
              <li><a href="http://facebook.com/gian.michelle">Facebook <i class="fa fa-facebook"></i></a></li>
              <li><a href="http://dribbble.com/gian_michelle">Dribbble <i class="fa fa-dribbble"></i></a></li>
              <li><a href="http://behance.net">Behance <i class="fa fa-behance"></i></a></li>
              
          </ul>
      </nav>
        
        
        
        
        
        
        
 
</body>
</html>

<?php
    if(isset($_REQUEST['login']))
    {
    session_start();
    $hostname = 'localhost';
    $dbname   = 'epolling';
    $username = 'root'; 
    $password = '';
    $link=mysql_connect($hostname, $username, $password) or DIE('Connection to host isailed, perhaps the service is down!');
    mysql_select_db($dbname) or DIE('Database name is not available!');

    $username=$_POST['username']; 
    $password=$_POST['password']; 
    
    $query= "SELECT * FROM login_master WHERE username='$username' AND pwd='$password'";
    $result=mysql_query($query) or die("Query Error:  ".mysql_error());
    $rows=mysql_num_rows($result);
    
    
        if($rows==1)
        {
            $_SESSION["user_name"] = $username;
            setcookie("user_name",$username,time()+1000);
            
            header("location:ADMIN_PG.php");
        }
    	else
        {
            $query = "SELECT * FROM candidate_reg WHERE user_name='$username' AND password='$password'";
            $res = mysql_query($query) or die("Query Error:  ".mysql_error());
            $rows = mysql_num_rows($res);
                if ($rows==1 ) 
                {
                    $_SESSION["c_id"] = $rows[0];
                    setcookie("c_id",$rows[0],time()+1000);
                    echo "<br /><br /><br /><br /><br /><br />".$_SESSION["c_id"];
                    
                    header("location:CANDI_PG.php");
                }
                else 
                {
            	    $query = "SELECT * FROM voter_reg WHERE user_name='$username' AND password='$password'";
                	$res = mysql_query($query) or die("Query Error:  ".mysql_error());
                    $rows = mysql_num_rows($res);
                		if($rows==1)
                		{
                			$_SESSION["voter_id"] = $rows[0];
                 		     setcookie("voter_id",$rows[0],time()+1000);
                             
                             header("location:VOTER_PG.php");
                		}
                		else
                		{
                       			 echo "User-name or Password not found / Incorrect User-name or Password";
                		}       
              }
        }
    mysql_close($link);
    }
?>