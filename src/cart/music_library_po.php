<!DOCTYPE html>
<html>
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
						<td width="10%"><a href="#"><img src="Resources/common/home.jpg" onmouseover="this.src='Resources/common/home_over.jpg'" onmouseout="this.src='Resources/common/home.jpg'"></a></td>
						<td width="10%"><a href="music_library.php"><img src="Resources/common/browse.jpg" onmouseover="this.src='Resources/common/browse_over.jpg'" onmouseout="this.src='Resources/common/browse.jpg'"></a></td>
						<td width="10%"><a href="charts.html"><img src="Resources/common/charts.jpg" onmouseover="this.src='Resources/common/charts_over.jpg'" onmouseout="this.src='Resources/common/charts.jpg'"></a></td>		
						<td width="10%"><a href="user_login_session.php"><img src="Resources/common/mycart.jpg" onmouseover="this.src='Resources/common/mycart_over.jpg'" onmouseout="this.src='Resources/common/mycart.jpg'"></a></td>
						<td width="10%"><a href="user_login/user_login_session.php"><img src="Resources/common/myaccount.jpg" onmouseover="this.src='Resources/common/myaccount_over.jpg'" onmouseout="this.src='Resources/common/myaccount.jpg'"></a></td>
						<td width="10%"><a href="user_login/user_login_session.php"><img src="Resources/common/signin.jpg" onmouseover="this.src='Resources/common/signin_over.jpg'" onmouseout="this.src='Resources/common/signin.jpg'"></a></td>
						
						<td><div u="any" style="position: absolute; display: block; top: 0px; right: 260px; width: 280px; height: 40px;">


                <a class="share-icon share-facebook" target="_blank" href="http://www.facebook.com/sharer.php?u=http://jssor.com" title="Share on Facebook"></a>
                <a class="share-icon share-twitter" target="_blank" href="http://twitter.com/share?url=http://jssor.com&text=jQuery%20Image%20Slider/Slideshow/Carousel/Gallery/Banner%20javascript+html%20TOUCH%20SWIPE%20Responsive" title="Share on Twitter"></a>
                <a class="share-icon share-googleplus" target="_blank" href="https://plus.google.com/share?url=http://jssor.com" title="Share on Google Plus"></a>
                <a class="share-icon share-pinterest" target="_blank" href="http://pinterest.com/pin/create/button/?url=http://jssor.com&media=http://jssor.com/img/site/jssor.slider.jpg&description=jQuery%20Image%20Slider/Slideshow/Carousel/Gallery/Banner%20javascript+html%20TOUCH%20SWIPE%20Responsive" title="Share on Pinterst"></a>
                <a class="share-icon share-email" target="_blank" href="mailto:?Subject=Jssor%20Slider&Body=Highly%20recommended%20jQuery%20Image%20Slider/Slideshow/Carousel/Gallery/Banner%20javascript+html%20TOUCH%20SWIPE%20Responsive%20http://jssor.com" title="Share by Email"></a>
            </div></td>
            <td><div style="position: absolute; right: 100px; top: 7px; margin: 80000000 px;"><form id="sea" method="get" action="vish.php"><input name="search" type="search" size="20"/><input type="submit" value="go" /></form></div></td>
					</tr>
				</table>				
	</div>
	</br>
	</br>
	</br>
<!-- navigation -->
<div style="position: fixed; float: left; width: 20%;">
		<nav style="margin-top: 40%;">
		<a href="music_library.php" style="margin-left: 3%; text-decoration: none; color: #4fccc6">All</a></br>
		<a href="music_library_am.php" style="margin-left: 3%; text-decoration: none; color: #4fccc6">Alternative Metal</a></br>
		<a href="music_library_ar.php" style="margin-left: 3%; text-decoration: none; color: #4fccc6">Alternative Rock</a></br>
		<a href="music_library_co.php" style="margin-left: 3%; text-decoration: none; color: #4fccc6">Country</a></br>
		<a href="music_library_da.php" style="margin-left: 3%; text-decoration: none; color: #4fccc6">Dance</a></br>
		<a href="music_library_du.php" style="margin-left: 3%; text-decoration: none; color: #4fccc6">Dubstep</a></br>
		<a href="music_library_hm.php" style="margin-left: 3%; text-decoration: none; color: #4fccc6">Heavy Metal</a></br>
		<a href="music_library_po.php" style="margin-left: 3%; text-decoration: none; color: #4fccc6">Pop</a></br>
		<a href="music_library_rb.php" style="margin-left: 3%; text-decoration: none; color: #4fccc6">R&B</a></br>
		<a href="music_library_ro.php" style="margin-left: 3%; text-decoration: none; color: #4fccc6">Rock</a>
		
	</nav>
	</div>
	<div class="container" style="float:;"
	</br>
	</br>
	
	
	<table width="1000" border="0"align="center" style="color: white;">
			<tr>
				<caption colspan="10" align="center">
					<h1 style="color: white;font-size:220%;">Songs</h1>
				</caption>
			</tr>
			<tr style="margin-bottom: 50px; padding-bottom: 50px;">
				<th style="color=; margin-bottom: 50px;">Song Picture</th>
				<th style="background-color: rgb(87,87,87); margin-bottom: 50px;">Song Name</th>				
				<th style="background-color: rgb(87,87,87); margin-bottom: 50px;">Album Name</th>
				<th style="background-color: rgb(87,87,87); margin-bottom: 50px;">Artist Name</th>
				<th style="background-color: rgb(87,87,87); margin-bottom: 50px;">Genure Name</th>
				<th style="background-color: rgb(87,87,87); margin-bottom: 50px;">Song Price (Rs.)</th>
			</tr>
			<tr><td></td></tr>
			<?php
			require("connect.php");
			$query="select s.song_name, s.song_price, a.album_name, b.artist_name, g.genre_name, a.album_image,s.song_id
					from song s, album a, artist b, genre g 
					where s.album_id=a.album_id and s.artist_id=b.artist_id and s.genre_id=3 and s.genre_id=g.genre_id;";
			$run=mysql_query($query);
			while($row=mysql_fetch_array($run))
			{
				$song_name=$row['song_name'];
				$song_price=$row['song_price'];
				$song_picture=$row['album_image'];
				$album_name=$row['album_name'];
				$artist_name=$row['artist_name'];
				$genre_name=$row['genre_name'];
			?>
			<tr align="center">
				<td class="songs" width="50"><img src="../Admin Panel/album_images/<?php echo $song_picture ?>" width="200" height="160"></td>
				<td class="songs" width="70"><?php echo $song_name ?></td>
				<td class="songs" width="30"><?php echo $album_name ?></td>
				<td class="songs" width="30"><?php echo $artist_name ?></td>
				<td class="songs" width="1"><?php echo $genre_name ?></td>
				<td class="songs" width="40"><?php echo $song_price ?></td>
				<td>
					<form id="form1" name="form1" method="post" action="content.php">
						<input type="hidden" name="pid" id="pid" value="<?php echo $song_id;?>"/>
						<input type="submit" name="button" id="button" value="Add to Cart"/>
					</form>
					
				</td>
			</tr>
			<?php } ?>
				
				
		</table>
		
	</br>
	</br>
	</div>
	 <br />
	 <br />
	 
	<!-- footer -->
	
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
