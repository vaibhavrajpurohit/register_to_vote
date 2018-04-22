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
        </style>
    </head> 

<script language="javascript"> 

function  Validation()

{



if(document.ChangePassword.OldPassword.value=='')

            {

                alert('OldPassword Should not be left blank');

                ChangePassword.OldPassword.focus();

                return(false);

            }





if(document.ChangePassword.NewPassword.value=='')

            {

                alert('NewPassword Should not be left blank');

                ChangePassword.NewPassword.focus();

                return(false);

            }





if(document.ChangePassword.RetypePassword.value=='')

            {

                alert('RetypePassword Should not be left blank');

                ChangePassword.RetypePassword.focus();

                return(false);

            }





if(document.ChangePassword.OldPassword.value==document.ChangePassword.NewPassword.value)

	{

		   alert('New Password cannot be same as Old Password');

         ChangePassword.OldPassword.value="";

		 ChangePassword.NewPassword.value="";

		  ChangePassword.RetypePassword.value="";

		  ChangePassword.OldPassword.focus();

          return(false);
	}
}





function isStrongPassword(pwd, MinPWD) 

{

   var control =  document.getElementById(pwd);


   var myString= control.value; 


   var Stringlen = myString.length;

   var ValidateDigits = /[^0-9]/g;

   var ValidateSpChar = /[a-zA-Z0-9]/g;

   var ValidateChar = /[^a-zA-Z]/g;



   var digitString = myString.replace(ValidateDigits , "");

   var specialString = myString.replace(ValidateSpChar, "");

   var charString = myString.replace(ValidateChar, "");



   if(Stringlen < MinPWD)

   {

   alert("Passwords must be at least 8 characters");

   control.value="";

   control.focus();

   return false;

   }

   if(specialString < 1)

   {

   alert("Passwords must include at least 1 special (#,@,&,$ etc) characters");

   control.value="";

   control.focus();

   return false;

   }

   if(digitString < 1)

   {

   alert("Passwords must include at least 1 numeric characters");

   control.value="";

   control.focus();

   return false;

   }

   return;

} 

</script> 







</head>





<body>





<form name="ChangePassword" id="ChangePassword" action="PASSWORD1.php" method="post">



<table width="100%" ALIGN=CENTER bottommargin=0  topmargin=0>

<tr>

<td colspan=0 align=middle><font color="#a52a2a" style="FONT-SIZE: medium; FONT-FAMILY: verdana">Change Login Password</font>

</td>

</tr>

</table>

<table align=center rules=groups border=1  style="WIDTH: 550px;">

<tr><td colspan=3><FONT size=2 color=red face = arial><br>

	

	<b>

	<P style="BACKGROUND: #00ffff; LINE-HEIGHT: 140%; MARGIN-RIGHT: 11.25pt"><B><SPAN 

style="FONT-SIZE: 5pt; COLOR: red; FONT-FAMILY: 'Trebuchet MS'"><FONT 

size=4>&nbsp;Password Should:</FONT></SPAN></B></P>

<UL style="MARGIN-TOP: 0in" type=circle>

  <LI class=MsoNormal 

  style="BACKGROUND: #00ffff; MARGIN: 0in 11.5pt 0pt 0in; COLOR: #222222; LINE-HEIGHT: 140%; mso-margin-bottom-alt: auto; mso-list: l0 level1 lfo3; tab-stops: list .5in"><B><SPAN 

  style="FONT-FAMILY: Verdana; mso-bidi-font-size: 11.0pt"><FONT color=#954b5c>Minimum length should be of 8 characters and maximum of 20

 <o:p></O:P></FONT></SPAN></B>

  <LI class=MsoNormal 

  style="BACKGROUND: #00ffff; MARGIN: 0in 11.5pt 0pt 0in; COLOR: #222222; LINE-HEIGHT: 140%; mso-margin-bottom-alt: auto; mso-list: l0 level1 lfo3; tab-stops: list .5in"><B><SPAN 

  style="FONT-FAMILY: Verdana; mso-bidi-font-size: 11.0pt"><FONT color=#954b5c>Password is case sensitive



  <o:p></O:P></FONT></SPAN></B>

  <LI class=MsoNormal 

  style="BACKGROUND: #00ffff; MARGIN: 0in 11.5pt 0pt 0in; COLOR: #222222; LINE-HEIGHT: 140%; mso-margin-bottom-alt: auto; mso-list: l0 level1 lfo3; tab-stops: list .5in"><B><SPAN 

  style="FONT-FAMILY: Verdana; mso-bidi-font-size: 11.0pt"><FONT color=#954b5c>Must contain at least one numeric, one alphabet and one special character 



  <o:p></O:P></FONT></SPAN></B>



 <LI class=MsoNormal 

  style="BACKGROUND: #00ffff; MARGIN: 0in 11.5pt 0pt 0in; COLOR: BLUE; LINE-HEIGHT: 140%; mso-margin-bottom-alt: auto; mso-list: l0 level1 lfo3; tab-stops: list .5in"><B><SPAN 

  style="FONT-FAMILY: Verdana; mso-bidi-font-size: 11.0pt"><FONT color=#954b5c>Allowed Special characters like @,#,_,-,<,>,?,/,|,},{,*,&,^,%,$,,! etc.





  <o:p></O:P></FONT></SPAN></B>







	<br>



	

	</FONT>

	

	</td></tr>

</table>

<table align=center rules=groups border=2 style="WIDTH: 550px; HEIGHT: 100px">



<tr>

	<td><STRONG>&nbsp;&nbsp;&nbsp;&nbsp;<FONT face=Arial size=2 color=black>Old Password</FONT></STRONG></FONT></td>

	<td><INPUT ID="OldPassword" Name="OldPassword" Type="password" style="WIDTH: 160px; HEIGHT: 22px" maxLength=20><FONT color=red>* </FONT></td>

</tr>

<tr>

	<td><STRONG>&nbsp;&nbsp;&nbsp;&nbsp;<FONT face=Arial size=2 color=black>New Password</FONT></STRONG></FONT></td>

	<td><INPUT ID="NewPassword" Name="NewPassword" Type="password" style="WIDTH: 160px; HEIGHT: 22px" maxLength=20 onchange='return isStrongPassword("NewPassword",8);' ><FONT color=red>* </FONT>

	</td>

</tr>



<tr>

	<td><STRONG>&nbsp;&nbsp;&nbsp;&nbsp;<FONT face=Arial size=2 color=black>Retype Password</FONT></STRONG></FONT></td>

	<td><INPUT ID="RetypePassword" Name="RetypePassword" Type="password" style="WIDTH: 160px; HEIGHT: 22px" maxLength=20  onchange='return isStrongPassword("RetypePassword",8);'><FONT color=red>* </FONT></td>

</tr>	

<tr><td>&nbsp;</td><td>&nbsp;</td></tr>

<tr>

	<td colspan=2 align="center"><INPUT Type="submit" Value="Save"  onclick=" return Validation();">

	<INPUT Type="reset" Value="Reset"></td>    

</tr>

<tr><td>&nbsp;</td><td>&nbsp;</td></tr>

<!--<tr>

	<td>&nbsp;<STRONG><FONT color=blue face=Arial size=2><B>Forgot Password?</B></FONT></STRONG></td>

	<td align=right><FONT face=Arial color=teal size=2><FONT color=red>*</FONT>Mandatory Information!</FONT></td>    

</tr>-->

</table>





</td>


</tr>

</table>

</body>

</html>