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
			<h2><a  href="comments_admin.php">View Comments</a></h2>
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
			require("connect.php");
			$query="select * from album";
			$run=mysql_query($query);
			while($row=mysql_fetch_array($run))
			{
				$album_id=$row['album_id'];
				$album_name=$row['album_name'];
				$album_desc=substr($row['album_desc'],0,100);
				$album_price=$row['album_price'];
				$album_image=$row['album_image'];
				$genre_id=$row['genre_ID'];
				$artist_id=$row['artist_id'];
			?>
			<tr align="center">
				<td class="songs" width="20"><?php echo $album_id ?></td>
				<td class="songs" width="70"><?php echo $album_name ?></td>
				<td class="songs" width="40"><?php echo $album_desc ?></td>
				<td class="songs" width="40"><?php echo $album_price ?></td>
				<td class="songs" width="50"><img src="album_images/<?php echo $album_image ?>" width="50" height="40"></td>
				<td class="songs" width="30"><?php echo $genre_id ?></td>
				<td class="songs" width="1"><?php echo $artist_id ?></td>
				<td class="songs" width="1"><a class="blue" href="edit_album.php?edit_a=<?php echo $album_id; ?>">Update</a></td>
			</tr>
			<?php } ?>
				
				
		</table>
		
	</body>
	</div>
<</html>