	<?php
	session_start();
	$message=$recover="";
	?>
	<?php
	$a= 123;
			
	if(count($_POST)>0)
 {
		
	$conn = mysql_connect("localhost","root","");
	mysql_select_db("soundhaven",$conn);
	
	
	$result = mysql_query("SELECT * FROM customer WHERE email='" . $_POST["user_email"] . "' and password = '". $_POST["user_password"]."'");
		
	$row  = mysql_fetch_assoc($result);
	
		if(is_array($row)) {
			$_SESSION['user_email']=$row['email'];	
			$_SESSION['customer'] = $row['customer_id'];
			$_SESSION["user_name"] = $row['fname'];
			
			$_SESSION["user_password"] = $row['password'];
			echo $_SESSION['user_name'];
		
			
		} 
		else {
			
		$message = "Invalid Username or Password!";
			
	
			
				$recover="<a href='recovery.php'>Forgot Password?</a> ";
			
		}
	}
	
		if(isset($_SESSION["user_name"])) {
		header("Location:user_home.php");
		}
	?>

<!DOCTYPE html>
<html>
<title>User Login</title>
<link rel="stylesheet" href="normalize.css" />
<link rel="stylesheet" href="loginstyle.css" />
	<head>
		<!--<link rel="stylesheet" href="normalize.css" />-->
		<style>
			a.a1
			{
				text-decoration: none;
				color: white;
				line-height: 100px;
				margin-bottom: 100px;
				margin-right: 130px;
				margin-left: 30px;
			}
			
			
			div.header1
			{
				margin-top:11px;
				margin-left: 6px;
			  	height: 50px;
				background-color: black;
				position: fixed;
				z-index: 1000;
			}
			
			a.a2
			{
				text-decoration: none;
				color: #549695;
			}
			
			a.a2:hover
			{
				color: #376261;
			}
			
			
			
			
			
			
			form.search {
				position:relative;
				
				
			}
			
			form.search * {
				background: transparent;
		
			}
			form.s_text
			{
				-webkit-appearance: none;
				-moz-appearance: none;
				border: none;
				-webkit-border-radius: 0;
				-moz-border-radius: 0;
				padding:0;
				margin:0;
				
				
			}
			form.search
			{
				position:relative;
				width:200px;
				height:30px;
				
				border:1px solid #AAA;
				
				background: url(magnifyingglass.png) no-repeat #ddd;
				background: url(magnifyingglass.png) no-repeat, -webkit-linear-gradient(#fff,#ddd);
				background: url(magnifyingglass.png) no-repeat, -moz-linear-gradient(#fff,#ddd);
				
				-webkit-border-radius:40px;
				-moz-border-radius:40px;
				border-radius:40px 40px 40px 40px;
				
				-webkit-box-shadow: inset 0px 2px 5px rgba(0,0,0,.4),1px 1px 5px #DDD;
				-moz-box-shadow: inset 0px 2px 5px rgba(0,0,0,.4),1px 1px 5px #DDD;
				box-shadow: inset 0px 2px 5px rgba(0,0,0,.4),1px 1px 5px #DDD;
					}
			form.s_button{
				position: absolute;
				right: 65px;
				height: 30px;
				width: 50px;
				border: none;
				
				background:red;
				background:-webkit-linear-gradient(#172C3D,#2A496B 50%,#182430 51%,#000);
				background:-moz-linear-gradient(#172C3D,#2A496B 50%,#182430 51%,#000);
				
				-webkit-border-radius:0 40px 40px 0;
				-moz-border-radius:0 40px 40px 0;
				border-radius:0 40px 40px 0;
				
				-webkit-box-shadow: inset 1px 0 0px rgba(255,255,255,.4);
				-moz-box-shadow: inset 1px 0 0px rgba(255,255,255,.4);
				box-shadow: inset 1px 0 0px rgba(255,255,255,.4);
			
				border-left:1px solid rgba(0,0,0,.2);
				color: #FFF;
					}
		form.s_button :hover{
			background:-webkit-linear-gradient(#4E080D,#9C111A 50%,#4E080D 51%);
			background:-moz-linear-gradient(#4E080D,#9C111A 50%,#4E080D 51%);
				
			
					}
		
	form.s_text
		{
			position: absolute;
			left: 30px;
			float: right;
			width: 110px;
			height: 30px;
			color: #C0C0C0;
			outline: solid transparent;
					}
			
			
                .share-icon {
                	display: inline-block;
                    float: left;
                    margin: 4px;
                    width: 32px;
                    height: 32px;
                    cursor: pointer;
                    vertical-align: middle;
                    background-image: url(Resources/main_slider/share/share-icons.png);
                	}

                .share-facebook {
                    background-position: 0px 0px;
                	}

                    .share-facebook:hover {
                        background-position: 0px -40px;
                	}

        .share-twitter {
            background-position: -40px 0px;
        			}

            .share-twitter:hover {
                background-position: -40px -40px;
            		}

        .share-pinterest {
            background-position: -80px 0px;
        			}

            .share-pinterest:hover {
                background-position: -80px -40px;
           			}


                .share-googleplus {
                    background-position: -120px 0px;
                	}

                    .share-googleplus:hover {
                        background-position: -120px -40px;
                    }


                .share-email {
                    background-position: -320px 0px;
                	}

                    .share-email:hover {
                        background-position: -320px -40px;
                    }
            </style>

     		
	</head>
	<body style="background: url('Resources/common/blackorchid_@2X.jpg')">
	<div class="header1" style="position: fixed; width: 100%; background: transparent;">	
				<table width="98.5%">
					<tr align="center">
						<td width="10%"><a href="../index.php"><img src="Resources/common/home.jpg" onmouseover="this.src='Resources/common/home_over.jpg'" onmouseout="this.src='Resources/common/home.jpg'"></a></td>
						<td width="10%"><a href="music_library.php"><img src="Resources/common/browse.jpg" onmouseover="this.src='Resources/common/browse_over.jpg'" onmouseout="this.src='Resources/common/browse.jpg'"></a></td>
						<td width="10%"><a href="charts.html"><img src="Resources/common/charts.jpg" onmouseover="this.src='Resources/common/charts_over.jpg'" onmouseout="this.src='Resources/common/charts.jpg'"></a></td>		
						<td width="10%"><a href="user_login_session.php"><img src="Resources/common/mycart.jpg" onmouseover="this.src='Resources/common/mycart_over.jpg'" onmouseout="this.src='Resources/common/mycart.jpg'"></a></td>
						<td width="10%"><a href="user_login_session.php"><img src="Resources/common/myaccount.jpg" onmouseover="this.src='Resources/common/myaccount_over.jpg'" onmouseout="this.src='Resources/common/myaccount.jpg'"></a></td>
						<td width="10%"><a href="user_login_session.php"><img src="Resources/common/signin.jpg" onmouseover="this.src='Resources/common/signin_over.jpg'" onmouseout="this.src='Resources/common/signin.jpg'"></a></td>
						
				<div>	
                <td width="1%"><a class="share-icon share-facebook" target="_blank" href="http://www.facebook.com/sharer.php?u=http://jssor.com" title="Share on Facebook"></a> </td>
                <td width="1%"><a class="share-icon share-twitter" target="_blank" href="http://twitter.com/share?url=http://jssor.com&text=jQuery%20Image%20Slider/Slideshow/Carousel/Gallery/Banner%20javascript+html%20TOUCH%20SWIPE%20Responsive" title="Share on Twitter"></a></td>
                <td width="1%"><a class="share-icon share-googleplus" target="_blank" href="https://plus.google.com/share?url=http://jssor.com" title="Share on Google Plus"></a></td>
                <td width="1%"><a class="share-icon share-pinterest" target="_blank" href="http://pinterest.com/pin/create/button/?url=http://jssor.com&media=http://jssor.com/img/site/jssor.slider.jpg&description=jQuery%20Image%20Slider/Slideshow/Carousel/Gallery/Banner%20javascript+html%20TOUCH%20SWIPE%20Responsive" title="Share on Pinterst"></a></td>
                <td width="1%"><a class="share-icon share-email" target="_blank" href="mailto:?Subject=Jssor%20Slider&Body=Highly%20recommended%20jQuery%20Image%20Slider/Slideshow/Carousel/Gallery/Banner%20javascript+html%20TOUCH%20SWIPE%20Responsive%20http://jssor.com" title="Share by Email"></a>
            </td>
            <td><div style="position: absolute; right: 100px; top: 7px;"><form id="sea" method="get" action="vish.php"><input name="search" type="search" size="20"/><input type="submit" value="go" /></form></div></td>
					</tr>
				</table>				
	</div>
	
	</br>
	</br>
	</br>
<!-- navigation -->		

			<div>
			<div class="content">
				<h1>" IF MUSIC BE THE FOOD OF LOVE, PLAY ON "</h1>
								<h1>-William Shakespeare </h1>
				
			</div>
			
			<form class="f1" method="post" class="login" action="">
	  			<h1 style="color: white">Sign In</h1>
	  			
	  			<span style="color: white">Email</span><br>
	  			<input type="text" name="user_email" size="30" class="email" id="text3"/><br>
	  			<span style="color: white">Password</span><br>
	  			<input type="password" name="user_password" size="30" id="text3" /><br><br>
	  			
	  			
	  			
	  			<input id="join" class="button" type="submit" name="login_user" size="30" value="Login"/><br><br>
	  			<span><?php if(!empty($message)){echo $message."<br>".$recover."<br><br>";}?></span>
	  			<span style="color: white">Haven't you joined us yet?</span><br><br>
	  			<input type="button" class="button" name="sign_up" size="30" value="Join Us" onclick="location.href='register.php'"/><br>
	  			
	  			
	  		</form><br>
	  	</div>
	  	
	<div style="margin-top: 650px;">
	  			<!-- footer -->
	
		
	<hr style="border-color: #4fccc6">
	<footer>
		<table style="background: transparent;">
			<tr width="100%">
				<td style="margin-left: 30px; margin-right: 20px; padding-left: 40px; padding-right: 40px;"><p style="color: #9eaa3c;"><b>About Us</b></p></td>
				<td style="margin-left: 30px; margin-right: 30px; padding-left: 250px; padding-right: 250px;"><p style="color: #9eaa3c"><b>Forum</b></p></td>
				<td style="margin-right: 20px; margin-left: 30px; padding-left: 40px; padding-right: 40px;"><p style="color: #9eaa3c"><b>Help</b></p></td>
			</tr>
			<tr width="100%">
				<td style="margin-left: 30px; margin-right: 20px; padding-left: 40px; padding-right: 40px;">
					<a class="a2" href="aboutus.html">About SoundHaven</a><br>
					<a class="a2" href="termsofuse.html">Terms of Use</a><br>
					<a class="a2" href="privacypolicy.html">Privacy Policy</a>
				</td>
				<td style="margin-left: 30px; margin-right: 30px; padding-left: 250px; padding-right: 250px;">				
					<a class="a2" href="../comments/comments.php">Message Board</a>
					<br>
					<a class="a2"href="https://www.facebook.com/soundhavensrilanka">SoundHaven on Facebook</a>
					<br>
					<a class="a2"href="https://twitter.com/SoundHavenSL">SoundHaven on Twitter</a>
				</td>
				<td style="margin-right: 20px; margin-left: 30px; padding-left: 40px; padding-right: 40px;">				
					<a class="a2" href="contactus.html">Contact Us</a>
					<br>
					<a class="a2" href="FAQ.html">FAQ</a>
				</td>
			</tr>
		</table>
		</footer>
		</div>
		<br>
	</body>
</html>