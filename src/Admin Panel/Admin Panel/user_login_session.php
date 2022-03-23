	<?php
	session_start();
	$message="";
	
	
	
	if(count($_POST)>0)
 
 	{
		if(($_POST['user_email']=='diyath')&& ($_POST['user_password']=='1234567d'))
		{
		$_SESSION["user_name"] ='diyath';
				header("location:index.php");
		}
		else 
			{
				$message="invaild username/password";
			}
		
 
	}

	?>
<html>
<head>
<title>User Login</title>
<link rel="stylesheet" href="normalize.css" />
<link rel="stylesheet" href="loginstyle.css" />


</head>
		<body>
			
			
			
			
			
			
		
			<div class="content">
				<h1>ADMIN LOGIN</h1> 
				
			</div>
			
		
			
			<form class="f1" method="post" class="login" action="">
	  			<h1 style="color: white">Sign In</h1>
	  			
	  			<span style="color: white">Email</span><br>
	  			<input type="text" name="user_email" size="30" class="email" id="text3"/><br>
	  			<span style="color: white">Password</span><br>
	  			<input type="password" name="user_password" size="30" id="text3" /><br><br>
	  			
	  			
	  			
	  			<input id="join" class="button" type="submit" name="login_user" size="30" value="Login"/><br><br>
	  			<span style="color: red;"><?php echo $message;?></span>
	  			
	  			
	  			
	  			
	  		</form><br>
	  	
	  		
		</body>
	</html>