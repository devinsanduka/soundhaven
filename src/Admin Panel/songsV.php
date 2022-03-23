<!DOCTYPE  html>
<<html>
	<head>
		<title>Admin Panel</title>
		<link rel="stylesheet" type="text/css" href="admin.css" />
	</head>
	<div id="container">
	<body>
		<div id="heading">
			 <a style="margin-left: 1200px;" href="logout.php"><input type="submit" id="submit" class="button" value="Logout" style="margin-top: 20px;"></a>
			<a href="index.php">
			<h1 style="padding-top: 5%;">SOUNDHAVEN ADMIN PANEL</h1></a>
		<div id="sidebar" class="side">
			<h2><a  href="user_info.php">View User Information</a></h2>
			<h2><a  href="songs.php">View Songs</a></h2>
			<h2><a  href="upload_songs.php">Upload Songs</a></h2>
			<h2><a  href="albums.php">View Albums</a></h2>
			<h2><a  href="upload_albums.php">Upload Albums</a></h2>
			<h2><a  href="artist.php">View Artists</a></h2>
			<h2><a  href="insert_artist.php">Insert New Artists</a></h2>
			<h2><a  href="#">View Comments</a></h2>
		</div>
	     <div id="search" style=" margin-top: 80px;">
	     <table>
			<tr align="right">
				<td width="24%" style="background: transparent;" >
					<form method="get"  action="resultpage.php"  >
						<input type="text" size="30%" placeholder="Search Here"  name="find"  />
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
		<table width="1000" border="0"align="center">
			<tr>
				<caption colspan="10" align="center">
					<h1 style="color: white;font-size:220%;">Songs</h1>
				</caption>
			</tr>
			<tr>
				<th style="background-color: rgb(87,87,87);">Song ID</th>
				<th style="background-color: rgb(87,87,87);">Song Name</th>
				<th style="background-color: rgb(87,87,87);">Song Price ($)</th>
				<th style="background-color: rgb(87,87,87);">Song Picture</th>
				<th style="background-color: rgb(87,87,87);">Album ID</th>
				<th style="background-color: rgb(87,87,87);">Artist ID</th>
				<th style="background-color: rgb(87,87,87);">Genure ID</th>
				<th style="background-color: rgb(87,87,87);">Update</th>
			</tr>
			
			
			
			
			<?php
			
			$songid=$_SERVER['QUERY_STRING'];
			  $construct1="SELECT song_name,song_price,song_picture,artist_id,genre_id,album_id
			              FROM song 
			              WHERE song_id='$songid'";
			 
			  		  
			  
			 $con=mysqli_connect("localhost","root","","soundhaven");
							
			 
			 if (mysqli_connect_errno()) {
                    echo "Failed to connect to MySQL: " . mysqli_connect_error();
                        }
           
			
			    $results1=mysqli_query($con,$construct1);
				  $numrows1=mysqli_num_rows($results1);
			 while($row1=mysqli_fetch_array($results1)){
				
				$songname=$row1['song_name'];
				$songprice=$row1['song_price'];
				$songpicture=$row1['song_picture'];
				$artistid=$row1['artist_id'];
			    $genreid=$row1['genre_id'];
			    $albumid=$row1['album_id'];
			  
			  }
			 
			 
			 
			?>
			
			
			
			
			
			
			
			
			
			
			
			
			<tr align="center">
				<td class="songs" width="20"><?php echo $songid ;?></td>
				<td class="songs" width="70"><?php echo $songname ;?></td>
				<td class="songs" width="40"><?php echo $songprice; ?></td>
				<td class="songs" width="50"><img src="song_images/<?php echo $songpicture ;?>" width="50" height="40"></td>
				<td class="songs" width="30"><?php echo $albumid ?></td>
				<td class="songs" width="30"><?php echo $artistid ;?></td>
				<td class="songs" width="1"><?php echo $genreid ;?></td>
				<td class="songs" width="1"><a class="blue" href="edit_song.php?edit=<?php echo $songid; ?>">Update</a></td>
			</tr>
			
				
				
		</table>
		
	</body>
	</div>
<</html>