<!DOCTYPE  html>
<html>
	<head>
		<title>Admin Panel</title>
		<link rel="stylesheet" type="text/css" href="admin.css" />
<style>
	
	background: url("diagonals_trans.png");
background-repeat: repeat;
color: #fff;
font-weight: bold;
font-size: 20px;
border: none !important;
border-bottom: 1px #000 solid !important;
border-top: 2px #000 solid !important;
}
div.liveGraph div.bars div[bar="tb3"] span {
background-color: #f00;
} /* ONLY MATCHES THE FIRST BAR */
div.liveGraph div.bars div[bar="tb2"] span {
background-color: #00f;
} /* ONLY MATCHES THE SECOND BAR */
div.liveGraph div.bars div[bar="tb1"] span {
background-color: #0f0;
} /* ONLY MATCHES THE THIRD BAR */
/* Other page styling */
</style>

	</head>
	<div id="container">
	<body>
		<div id="heading">
		 <a href="#"><img src="images (1).jpg" width="80" height="76" style="float: right;padding-right: 2%;z-index: -1;"/> </a>
		 </div>
			<a href="index.php"><h1 class="header" style="padding-top: 5%; ">SOUNDHAVEN ADMIN PANEL</h1></a>
		<div id="sidebar" class="side">
			<h2><a  href="user_info.php">View User Information</a></h2>
			<h2><a  href="songs.php">View Songs</a></h2>
			<h2><a  href="upload_songs.php">Upload Songs</a></h2>
			<h2><a  href="albums.php">View Albums</a></h2>
			<h2><a  href="upload_albums.php">Upload Albums</a></h2>
			<h2><a  href="artist.php">View Artists</a></h2>
			<h2><a  href="insert_artist.php">Insert New Artists</a></h2>
			<h2><a  href="comments_admin.php">View Comments</a></h2>
			
		</div>
		<div id="search" style=" margin-top: 80px;">
	     <table>
			<tr align="right">
				<td width="24%" style="background: transparent;" >
					<form method="get"  action="resultpage.php"  >
						<input type="text" size="30%" placeholder="Search Here"  name="find" value="<?php echo $_GET['find']; ?>" />
						<input type="submit" name="search" value="Search"/>
					</td>
				</tr>
				<tr>
						<td style="padding-left: 75%;" >
						<input type="radio" name="wise" value="song" checked="checked"/>Song
						<input type="radio" name="wise" value="album"/>Album
						<input type="radio" name="wise" value="artist"/>Artist
						</td>
						</tr>
				</form>
			</table>
			</div>
			
			<div style="width:500px;height:400px;line-height:3em;overflow:auto;padding:5px;position:absolute;top:300px;
 left:700px;  filter:alpha(opacity=50); opacity:0.5;background-color:white;border-radius:10px;">
 <?php
    $k= $_GET['find'];
	$p=$_GET['wise'];
	
	 $terms= explode(" ",$k);
   $con=mysqli_connect("localhost","root","","soundhaven");
							
			 
			 if (mysqli_connect_errno()) {
                    echo "Failed to connect to MySQL: " . mysqli_connect_error();
                        }

 
 
	
 if($p=='song'){
 	

	
	  
			 $construct1= "SELECT song_id,song_name
			              FROM song
			              WHERE   ";
						  
									  $i=0;
						  foreach ($terms as  $each) {
				
				$i++;
				 
				 if($i==1)
				 	
				 	 $construct1.="song_name LIKE '%$each%'";
	 
                else 
	                 $construct1.=" AND song_name LIKE '%$each%'";
 
					}	  
				 
 
      $results1=mysqli_query($con,$construct1);
	  $numrows1=mysqli_num_rows($results1);
	   
			  if($numrows1>0){
			  	while($row1=mysqli_fetch_assoc($results1)){
			  					
			  		$songname=$row1['song_name'];
			  		$songid=$row1['song_id'];
	
			     echo "<h2><a href='songsV.php?$songid' style='color:black;'>$songname</a></h2>";
					
			  				
			  			
			  		
			  }			
			  			
			  	}	
			  else
			  	 echo" No Songs found for \"<b>$k</b>\"";
			 
	  
	  
	  
 }
 
 
else if($p=='album'){

	

	
	  
			 $construct2= "SELECT album_id,album_name
			              FROM album
			              WHERE   ";
						  
									  $i=0;
						  foreach ($terms as  $each) {
				
				$i++;
				 
				 if($i==1)
				 	
				 	 $construct2.="album_name LIKE '%$each%'";
	 
                else 
	                 $construct2.=" AND album_name LIKE '%$each%'";
 
					}	  
				 
 
      $results2=mysqli_query($con,$construct2);
	  $numrows2=mysqli_num_rows($results2);
			  if($numrows2>0){
			  	while($row2=mysqli_fetch_assoc($results2)){
			  					
			  		$albumname=$row2['album_name'];
			  		$albumid=$row2['album_id'];
	
			     echo "<h2><a href='albumV.php?$albumid' style='color:black;'>$albumname</a></h2>";
					
			  				
			  			
			  		
			  }			
			  			
			  	}	
			  else
			  	 echo" No Albums found for \"<b>$k</b>\"";
			 	
	
	
}	
 else{ 
 	//echo "artist";
	  $construct3= "SELECT artist_id,artist_name
			              FROM artist
			              WHERE   ";
						  
									  $i=0;
						  foreach ($terms as  $each) {
				
				$i++;
				 
				 if($i==1)
				 	
				 	 $construct3.="artist_name LIKE '%$each%'";
	 
                else 
	                 $construct3.=" AND artist_name LIKE '%$each%'";
 
					}	  
				 
 
      $results3=mysqli_query($con,$construct3);
	  $numrows3=mysqli_num_rows($results3);
	   //echo $numrows3;
			  if($numrows3>0){
			  	while($row3=mysqli_fetch_assoc($results3)){
			  					
			  		$artistname=$row3['artist_name'];
			  		$artistid=$row3['artist_id'];
	
			     echo "<h2><a href='artistV.php?$artistid' style='color:black;'>$artistname</a></h2>";
					
			  				
			  			
			  		
			  }			
			  			
			  	}	
			  else
			  	 echo" No Atist Profiles found for \"<b>$k</b>\"";
			 	
	
	 
	 
	 
	 
	 
 } 
  ?>
 
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			</div>
			
		<div id="content">


	</div>
	</body>
	</div>
</html>
