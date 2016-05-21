<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>REGISTER</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>	
	<div id="container">
		<div id="header">
			<?php 
				include("header.php");
			?>           
        </div>
        <div id="centercol">
		<div id="leftcol">
			<div class="title">Register</div>
        
        	<div class="">
              	<div class="contact_form">
                <div class="form_subtitle">create new account</div>
                 <form name="register" action="process_register.php" method="GET">          
                    <div class="form_row">
                    <label class="contact"><strong>Username:</strong></label>
                    <input type="text" class="contact_input" name="username"/>
                    </div>  


                    <div class="form_row">
                    <label class="contact"><strong>Name:</strong></label>
                    <input type="text" class="contact_input" name="name" />
                    </div> 

                    <div class="form_row">
                    <label class="contact"><strong>Surname:</strong></label>
                    <input type="text" class="contact_input" name="surname" />
                    </div>


                    <div class="form_row">
                    <label class="contact"><strong>Email:</strong></label>
                    <input type="text" class="contact_input" name="email" />
                    </div>
                    
                    <div class="form_row">
                    <label class="contact"><strong>City:</strong></label>
                    <input type="text" class="contact_input" name="city" />
                    </div>
                    
                    <div class="form_row">
                    <label class="contact"><strong>Password:</strong></label>
                    <input type="password" class="contact_input" name="password" />
                    </div>                    
                    
                    <div class="form_row">
                    <input type="submit" class="register" value="register" />
                    </div>   
                  </form>    
                </div>
          </div>	
        <div class="clear"></div>
		</div>
		<div id="rightcol"> <?php include("right.php");	?> 	</div>
		<div class="clear"></div>
        <footer> <?php include("footer.php"); ?> </div></footer>
</div>
</body>
</html>
