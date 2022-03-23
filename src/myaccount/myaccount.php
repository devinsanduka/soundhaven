<?php


session_start();


$name=$country="";

$email_myaccount=$_SESSION['user_email'];

$con=mysqli_connect('localhost','root', '', 'soundhaven');

if($con)
{
	$query="select * from customer where email= '$email_myaccount'";
	$result=mysqli_query($con, $query);
	$row=mysqli_fetch_assoc($result);
	
	$name=$row['fname'];
	$country=$row['country'];
	
}
else {
	die ("can't connect to db").mysqli_connect_error($con);
}





?>



<!DOCTYPE html>
<html>
	<link rel="stylesheet" href="myaccount.css" />
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
			
			
			div.header2
			{
				height: 50px;
				background-color: black;
				position: fixed;
				z-index: 100;
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
	<div class="header2" style="position: fixed; width: 100%; background: transparent;">	
				<table width="98.5%">
					<tr align="center">
						<td width="10%"><a href="../user_login/user_home.php"><img src="Resources/common/home.jpg" onmouseover="this.src='Resources/common/home_over.jpg'" onmouseout="this.src='Resources/common/home.jpg'"></a></td>
						<td width="10%"><a href="../music_library.php"><img src="Resources/common/browse.jpg" onmouseover="this.src='Resources/common/browse_over.jpg'" onmouseout="this.src='Resources/common/browse.jpg'"></a></td>
						<td width="10%"><a href="../charts.html"><img src="Resources/common/charts.jpg" onmouseover="this.src='Resources/common/charts_over.jpg'" onmouseout="this.src='Resources/common/charts.jpg'"></a></td>		
						<td width="10%"><a href="../user_login/user_login_session.php"><img src="Resources/common/mycart.jpg" onmouseover="this.src='Resources/common/mycart_over.jpg'" onmouseout="this.src='Resources/common/mycart.jpg'"></a></td>
						<td width="10%"><a href="../myaccount/myaccount.php"><img src="Resources/common/myaccount.jpg" onmouseover="this.src='Resources/common/myaccount_over.jpg'" onmouseout="this.src='Resources/common/myaccount.jpg'"></a></td>
						<td width="10%"><a href="../user_login/logout.php"><img src="Resources/common/sign_out.jpg" onmouseover="this.src='Resources/common/sign_out_hover.jpg'" onmouseout="this.src='Resources/common/sign_out.jpg'"></a></td>
						
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
	
<div style=" color:blue; solid; border-color:#4fccc6; height:1000px; margin-top: 99px;">
	
	<div class="one" style=" position: absolute; margin-top: 100px;  width:400px; height:500px">
		
		
		<img width="225px" height="225px" style=" margin-left:70px;"  src="images.jpg"/>
		<div>
			<form>
			<input id="upload"  type="file"/><br /><br/>
			<span style="margin-left: 70px; margin-top: 10px; font-size:20px;"><?php echo $name?></span><br/>
			<span style="margin-left: 70px; margin-top: 10px; font-size:20px;"><?php echo $country;?></span><br />
			<a href="editaccount.php"><input id="edit" class="button"  type="button" value="Edit Profile" style="text-decoration: none"/></a>
			</form>
		</div>

	</div>
	
	<div class="one" style=" position: absolute; margin-top: 100px; margin-left: 470px; width:800px; height:800px; border:solid; border-color:#4fccc6;">
		
	</div>

</div>

<hr />
	<div align="bottom">
		<footer>
		<table style="background: transparent;">
			<tr width="100%">
				<td style="margin-left: 30px; margin-right: 20px; padding-left: 40px; padding-right: 40px;"><p style="color: #9eaa3c;"><b>About Us</b></p></td>
				<td style="margin-left: 30px; margin-right: 30px; padding-left: 250px; padding-right: 250px;"><p style="color: #9eaa3c"><b>Forum</b></p></td>
				<td style="margin-right: 20px; margin-left: 30px; padding-left: 40px; padding-right: 40px;"><p style="color: #9eaa3c"><b>Help</b></p></td>
			</tr>
			<tr width="100%">
				<td style="margin-left: 30px; margin-right: 20px; padding-left: 40px; padding-right: 40px;">
					<a class="a2" href="about.html">About SoundHaven</a><br>
					<a class="a2" href="terms.html">Terms of Use</a><br>
					<a class="a2" href="privacy.html">Privacy Policy</a>
				</td>
				<td style="margin-left: 30px; margin-right: 30px; padding-left: 250px; padding-right: 250px;">				
					<a class="a2" href="messageboard.html">Message Board</a>
					<br>
					<a class="a2"href="facebook.com/SoundHaven">SoundHaven on Facebook</a>
					<br>
					<a class="a2"href="twitter.com/SoundHaven">SoundHaven on Twitter</a>
				</td>
				<td style="margin-right: 20px; margin-left: 30px; padding-left: 40px; padding-right: 40px;">				
					<a class="a2" href="contactus.html">Contact Us</a>
					<br>
					<a class="a2" href="faq.html">FAQ</a>
				</td>
			</tr> 
		</table>
		</footer>
		</div>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		
		
	</body>
</html>