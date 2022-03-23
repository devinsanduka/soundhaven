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
		<table width="1000" border="2"align="center">
			<tr>
				<caption colspan="10" align="center">
					<h1 style="color: white;font-size:220%;">Albums</h1>
				</caption>
			</tr>
			<tr>
				<th style="background-color: rgb(87,87,87);">Album ID</th>
				<th style="background-color: rgb(87,87,87);">Album Name</th>
				<th style="background-color: rgb(87,87,87);">Album Description</th>
				<th style="background-color: rgb(87,87,87);">Album Price ($)</th>
				<th style="background-color: rgb(87,87,87);">Album Image</th>
				<th style="background-color: rgb(87,87,87);">Genre ID</th>
				<th style="background-color: rgb(87,87,87);">Artist ID</th>
				<th style="background-color: rgb(87,87,87);">Update</th>
			</tr>
			<?php
			//require("connect.php");
			$albumid=$_SERVER['QUERY_STRING'];
			$construct1="SELECT album_name,album_image,album_desc,artist_id,genre_ID,album_price 
			             FROM  album
			             WHERE album_id='$albumid'";
						 
			 $con=mysqli_connect("localhost","root","","soundhaven");
							
			 
			 if (mysqli_connect_errno()) {
                    echo "Failed to connect to MySQL: " . mysqli_connect_error();
                        }
           			 
			$results1=mysqli_query($con,$construct1);
			while($row1=mysqli_fetch_array($results1))
			{
				//$album_id=$row1['album_id'];
				$albumname=$row1['album_name'];
				$albumdesc=substr($row1['album_desc'],0,100);
				$albumprice=$row1['album_price'];
				$albumimage=$row1['album_image'];
				$genreid=$row1['genre_ID'];
				$artistid=$row1['artist_id'];
			?>
			<tr align="center">
				<td class="songs" width="20"><?php echo $albumid ?></td>
				<td class="songs" width="70"><?php echo $albumname ?></td>
				<td class="songs" width="40"><?php echo $albumdesc ?></td>
				<td class="songs" width="40"><?php echo $albumprice ?></td>
				<td class="songs" width="50"><img src="album_images/<?php echo $albumimage ?>" width="50" height="40"></td>
				<td class="songs" width="30"><?php echo $genreid ?></td>
				<td class="songs" width="1"><?php echo $artistid ?></td>
				<td class="songs" width="1"><a class="blue" href="edit_album.php?edit_a=<?php echo $albumid; ?>">Update</a></td>
			</tr>
			<?php } ?>
				
				
		</table>
		
	</body>
	</div>
<</html>