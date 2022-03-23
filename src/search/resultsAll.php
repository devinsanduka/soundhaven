<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="normalize.css" />
		<link rel="stylesheet" href="all.css" />
		
		
	</head>
	<body>
		 	<div class="header1" style="position: fixed; width: 100%; background: transparent;z-index: 10;">	
				<table width="98.5%">
					<tr align="center">
						
					<td width="10%"><a href="../index.php"><img src="Resources/common/home.jpg" onmouseover="this.src='Resources/common/home_over.jpg'" onmouseout="this.src='Resources/common/home.jpg'"></a></td>
						<td width="10%"><a href="../music_library/music_library.php"><img src="Resources/common/browse.jpg" onmouseover="this.src='Resources/common/browse_over.jpg'" onmouseout="this.src='Resources/common/browse.jpg'"></a></td>
						<td width="10%"><a href="../charts.html"><img src="Resources/common/charts.jpg" onmouseover="this.src='Resources/common/charts_over.jpg'" onmouseout="this.src='Resources/common/charts.jpg'"></a></td>		
						<td width="10%"><a href="../cart/user_login_session.php"><img src="Resources/common/mycart.jpg" onmouseover="this.src='Resources/common/mycart_over.jpg'" onmouseout="this.src='Resources/common/mycart.jpg'"></a></td>
						<td width="10%"><a href="../myaccount/myaccount.php"><img src="Resources/common/myaccount.jpg" onmouseover="this.src='Resources/common/myaccount_over.jpg'" onmouseout="this.src='Resources/common/myaccount.jpg'"></a></td>
						<td width="10%"><a href="../user_login/user_login_session.php"><img src="Resources/common/signin.jpg" onmouseover="this.src='Resources/common/signin_over.jpg'" onmouseout="this.src='Resources/common/signin.jpg'"></a></td>
						
				<div>	
                <td width="1%"><a class="share-icon share-facebook" target="_blank" href="http://www.facebook.com/sharer.php?u=http://jssor.com" title="Share on Facebook"></a> </td>
                <td width="1%"><a class="share-icon share-twitter" target="_blank" href="http://twitter.com/share?url=http://jssor.com&text=jQuery%20Image%20Slider/Slideshow/Carousel/Gallery/Banner%20javascript+html%20TOUCH%20SWIPE%20Responsive" title="Share on Twitter"></a></td>
                <td width="1%"><a class="share-icon share-googleplus" target="_blank" href="https://plus.google.com/share?url=http://jssor.com" title="Share on Google Plus"></a></td>
                <td width="1%"><a class="share-icon share-pinterest" target="_blank" href="http://pinterest.com/pin/create/button/?url=http://jssor.com&media=http://jssor.com/img/site/jssor.slider.jpg&description=jQuery%20Image%20Slider/Slideshow/Carousel/Gallery/Banner%20javascript+html%20TOUCH%20SWIPE%20Responsive" title="Share on Pinterst"></a></td>
                <td width="1%"><a class="share-icon share-email" target="_blank" href="mailto:?Subject=Jssor%20Slider&Body=Highly%20recommended%20jQuery%20Image%20Slider/Slideshow/Carousel/Gallery/Banner%20javascript+html%20TOUCH%20SWIPE%20Responsive%20http://jssor.com" title="Share by Email"></a>
            </td>
            <td><div style="position: absolute; right: 80px; top: 7px;"><form id="sea" method="get" action="resultsAll.php"><input name="search" type="search" size="20"   value="<?php echo $_GET['search'];?>"/><input type="submit" value="go" /></form></div></td>
					</tr>
				</table>				
	</div>
		
		
		<!--
		<form method="get" action="resultsSong.php">
				<input  style="margin-top: 70px; margin-left: 300px;" type="text" size="50" name="search"  value="<?php echo $_GET['search'];?>"/>
				<input type="submit" value="Search" />
				
		</form>-->
				 
	
 <?php	
	         $k= $_GET['search'];
		   
			 $terms= explode(" ",$k);
			 
			 //constructing query for artist
			  $construct1="SELECT artist_id,artist_name 
			              FROM artist 
			              WHERE  ";
							  $i=0;
							  
						  foreach ($terms as  $each) {
				
				$i++;
				 
				 if($i==1){
				 	 $construct1 .="  artist_name LIKE '%$each%' ";
				 }
				 else {
					  $construct1 .=" AND artist_name LIKE '%$each%' ";
				 }
			 }	
						  
		     //constructing query for album
		     		  
						  $construct2="SELECT album_id,album_name,artist_name 
			              FROM album alb,artist art 
			              WHERE alb.artist_id=art.artist_id AND ";
							  $i=0;
							  
						  foreach ($terms as  $each) {
				
				$i++;
				 
				 if($i==1){
				 	 $construct2 .="  album_name LIKE '%$each%' ";
				 }
				 else {
					  $construct2 .=" AND album_name LIKE '%$each%' ";
				 }
			 }	
					
					
					
				//constructing query for song
				
								  $construct3="SELECT song_id,song_name,artist_name 
			                                   FROM song s,artist art
			                                   WHERE s.artist_id=art.artist_id AND ";
							  $i=0;
							  
						  foreach ($terms as  $each) {
				
				$i++;
				 
				 if($i==1){
				 	 $construct3 .="  song_name LIKE '%$each%' ";
				 }
				 else {
					  $construct3 .=" AND song_name LIKE '%$each%' ";
				 }
			 }	
					
				//connecting to the database 	  
					  $con=mysqli_connect("localhost","root","","soundhaven");
							
			 
			 if (mysqli_connect_errno()) {
                    echo "Failed to connect to MySQL: " . mysqli_connect_error();
                        }
                        
                //executing the  query for artist
						
					 $results1=mysqli_query($con,$construct1);	
					 
				//executing the  query for album
					 $results2=mysqli_query($con,$construct2);	
					 
				//executing the  query for song	 
					 $results3=mysqli_query($con,$construct3);	
					 
				//retrieving results for artist
	echo "<div class='content'>";//starting container div
				 $numrows1=mysqli_num_rows($results1);	 
					if($numrows1>0){
						echo"<h2>Artists<h2/> <br/>";
						  	while($row1=mysqli_fetch_assoc($results1)){
						  		 $artistname1=$row1['artist_name'];
				                 $artistid1=$row1['artist_id'];	
			                     echo"<h3><a href='artist_structure.php?$artistid1'style='text-decoration:none;'>$artistname1</a><h3/>";
								
						  	}					
						}
					else
						         echo" No Artist Profiles Found for \"<b>$k</b>\""; 
								 echo"<br/>";
								 
				//retrieving results for album
							 $numrows2=mysqli_num_rows($results2);	 
					if($numrows2>0){
						echo"<h2>Albums<h2/> <br/>";
						  	while($row2=mysqli_fetch_assoc($results2)){	 
							 $albumid2=$row2['album_id'];
		                     $albumname2=$row2['album_name'];
							 $artistname2=$row2['artist_name'];
							 echo" <h3><a href='album_structure.php?$albumid2' style='text-decoration:none;'>$albumname2-$artistname2</a><h3/>";
							}
					   }
					else
						
						     echo" No Albums Found for \"<b>$k</b>\"";
					         echo"<br/>";
				//retrieving results for song
				            $numrows3=mysqli_num_rows($results3);	 
					if($numrows3>0){
						echo"<h2>Songs<h2/> <br/>";
						  	while($row3=mysqli_fetch_assoc($results3)){	
						    	  $songid3=$row3['song_id'];	
		                          $songname3=$row3['song_name'];
								  $artistname3=$row3['artist_name'];
								  echo"<h3><a href='song_structure.php?$songid3'style='text-decoration:none;'>$songname3-$artistname3</a><h3/> ";
							}
					  } 
					
					else 
						          echo" No Songs found for \"<b>$k</b>\""; 
					              echo"<br/>";
		echo "</div>"; //closing container div
					 mysqli_close($con); 
					 
					 
				 echo "<div class='links'>";//starting links div
					 echo"<a class='category' href='resultsAll.php?search=$k'><form><input type='button' class='btn' value='Everything'/></form></a><br/>";
					 echo"<a class='category' href='resultsArtist.php?search=$k'><form><input type='button' class='btn' value='Artists'/></form></a><br/>";
					 echo"<a class='category' href='resultsAlbum.php?search=$k'><form><input type='button' class='btn' value='Albums'/></form></a><br/>";
					 echo"<a class='category' href='resultsSong.php?search=$k'><form><input type='button' class='btn' value='Tracks'/></form></a><br/>";		  
				echo "</div>";//closing links div	
						  ?>
						   
		
	
	<div style="margin-bottom: 30px;" >
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
				  
</body>
</html>					   