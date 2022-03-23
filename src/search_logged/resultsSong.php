<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="normalize.css" />
		<link rel="stylesheet" href="all.css" />
		
		
	</head>
	<body>
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
            <td><div style="position: absolute; right: 80px; top: 7px;"><form id="sea" method="get" action="resultsSong.php"><input name="search" type="search" size="20"  value="<?php echo $_GET['search'];?>"/><input type="submit" value="go" /></form></div></td>
					</tr>
				</table>				
	</div>
		
		
		
		
		
		
		 
			<!--<form method="get" action="resultsSong.php">
				<input  style="margin-top: 70px; margin-left: 300px;" type="text" size="50" name="search"  value="<?php echo $_GET['search'];?>"/>
				<input type="submit" value="Search" />
				
			</form>-->
				 






<?php	
	   $k= $_GET['search'];
		   
	   $terms= explode(" ",$k);
	   
	   			//constructing query for song
				
								  $construct3="SELECT song_id,song_name,artist_name 
			                                   FROM song s,artist art
			                                    WHERE s.artist_id=art.artist_id AND  ";
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
			   //executing the  query for song	 
					 $results3=mysqli_query($con,$construct3);	
					 
		      //retrieving results for song
		      echo "<div class='content'>";//starting container div
				            $numrows3=mysqli_num_rows($results3);	 
					if($numrows3>0){
						echo"<h2>Songs<h2/> <br/>";
						  	while($row3=mysqli_fetch_assoc($results3)){	
						    	  $songid3=$row3['song_id'];	
		                          $songname3=$row3['song_name'];
		                          $artistname3=$row3['artist_name'];
								  echo"<h3><a href='song_structure.php?$songid3'style='text-decoration:none;'>$songname3- $artistname3</a><h3/> ";
							}
					  } 
					
					else 
						          echo" No Songs found for \"<b>$k</b>\""; 
					              echo"<br/>";
					
					 mysqli_close($con); 
					echo "</div>"; //closing container div
					 
					  echo "<div class='links'>";//starting links div
					 echo"<a class='category' href='resultsAll.php?search=$k'><form><input type='button' class='btn' value='Everything'/></form></a><br/>";
					 echo"<a class='category' href='resultsArtist.php?search=$k'><form><input type='button' class='btn' value='Artists'/></form></a><br/>";
					 echo"<a class='category' href='resultsAlbum.php?search=$k'><form><input type='button' class='btn' value='Albums'/></form></a><br/>";
					 echo"<a class='category' href='resultsSong.php?search=$k'><form><input type='button' class='btn' value='Tracks'/></form></a><br/>";		  
				echo "</div>";//closing links div	  
						  ?>
						   
						  
</body>
</html>	