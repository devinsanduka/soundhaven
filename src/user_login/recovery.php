<?php

$recovery_Err1=$recovery_Err2=$email=$keyword="";
$con=mysqli_connect('localhost', 'root', '', 'soundhaven');
		if(count($_POST)>0)
		{
			$email=$_POST['email'];
			$keyword=$_POST['keyword'];
			
			
			$query="SELECT * FROM customer WHERE email='$email' and country='$keyword'";
			$result=mysqli_query($con, $query);
			$row=mysqli_fetch_assoc($result);
				
				
				if(isset($row))
				{	$newPassword=$_POST['newPassword'];
					$confirmPassword=$_POST['confirmPassword'];
					
					if($newPassword==$confirmPassword)
					{
					$password_reset_query="UPDATE customer SET password='$newPassword' WHERE email='$email'";
					$updatePass_result=mysqli_query($con, $password_reset_query);
						if($updatePass_result)
						{
							header("Location:user_login_session.php");
							exit;
						}
						else {
							die("that didn't happen ".mysqli_error($connection));
						}
					}
					else {
						$recovery_Err2="  *Passwords doesn't match";
					}
				
				}	
				else {
					$recovery_Err1=" Email/Keyword is invalid";
				}
		}
		mysqli_close($con);



?>

<!DOCTYPE html>
<html>
	<title>Recovery</title>
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
			
			
			div.header2
			{
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
	<head>
		<link rel="stylesheet" href="recovery.css">
		<link rel="stylesheet" href="normalize.css" />

		</head>
	<body style="background: url('Resources/common/blackorchid_@2X.jpg')">
	<div class="header2" style="position: fixed; width: 100%; background: transparent; margin-top: 10px;">	
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
            <td><div style="position: absolute; right: 100px; top: 7px;"><form id="sea" method="get" action="search/resultsall.php"><input name="search" type="search" size="20"/><input type="submit" value="go" /></form></div></td>
					</tr>
				</table>				
	</div>
	</br>
	</br>
	</br>
<!-- navigation -->
		
		
		
		<div class="content">
				<h2>YOU CAN RESET YOUR PASSWORD USING YOUR EMAIL & SECRURITY KEYWORD </h2> 
				
			</div>
		
		
		<form class="form-container" method="post" action="">
			<span style="color: white">Email</span><br> 
			<input type="email" name="email" id="text3" required> 
			<br><br> 
			<span style="color: white">New Password</span><br> 
			<input type="password"  name="newPassword" id="text3" required pattern="[a-zA-Z0-9]{8}"> 
			<br><br> 
			<span style="color: white">Confirm Password </span><span class="error1"> <?php echo $recovery_Err2;  ?></span><br> 
			<input type="password" id="text3" name="confirmPassword" required><br><br>
			
			<span style="color: white">Security Keyword</span><br> 
			
			<input type="text" id="text3" name="keyword" required><br><br>
			<input type="submit" id="submit" class="button"><br>
			<span class="error1"><?php echo $recovery_Err1;  ?></span>
			 
			
		</form>
	<!-- footer -->
	<div style="margin-top: 600px;">
	<hr style="border-color: #4fccc6">
	
	</style>
	<br />
	<br />
		<div>
		<footer>
		<table style="background: transparent;">
			<tr width="100%">
				<td style="margin-left: 30px; margin-right: 20px; padding-left: 40px; padding-right: 40px;"><p style="color: #9eaa3c;"><b>About Us</b></p></td>
				<td style="margin-left: 30px; margin-right: 30px; padding-left: 250px; padding-right: 250px;"><p style="color: #9eaa3c"><b>Forum</b></p></td>
				<td style="margin-right: 20px; margin-left: 30px; padding-left: 40px; padding-right: 40px;"><p style="color: #9eaa3c"><b>Help</b></p></td>
			</tr>
			<tr width="100%">
				<td style="margin-left: 30px; margin-right: 20px; padding-left: 40px; padding-right: 40px;">
					<a class="a2" href="../static_pages/aboutus.html">About SoundHaven</a><br>
					<a class="a2" href="../static_pages/termsofuse.html">Terms of Use</a><br>
					<a class="a2" href="../static_pages/privacypolicy.html">Privacy Policy</a>
				</td>
				<td style="margin-left: 30px; margin-right: 30px; padding-left: 250px; padding-right: 250px;">				
					<a class="a2" href="../comments/comments.php">Comments</a>
					<br>
					<a class="a2"href="https://www.facebook.com/soundhavensrilanka">SoundHaven on Facebook</a>
					<br>
					<a class="a2"href="https://twitter.com/SoundHavenSL">SoundHaven on Twitter</a>
				</td>
				<td style="margin-right: 20px; margin-left: 30px; padding-left: 40px; padding-right: 40px;">				
					<a class="a2" href="../static_pages/contactus.html">Contact Us</a>
					<br>
					<a class="a2" href="../static_pages/FAQ.html">FAQ</a>
				</td>
			</tr>
		</table>
		<br>
		</footer>
		</div>
		</div>
	</body>
</html>
