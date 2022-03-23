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
		</div>
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
			require("connect.php");
			$query="select * from song ";
			$run=mysql_query($query);
			while($row=mysql_fetch_array($run))
			{
				$song_id=$row['song_id'];
				$song_name=$row['song_name'];
				$song_price=$row['song_price'];
				$song_picture=$row['song_picture'];
				$album_id=$row['album_id'];
				$artist_id=$row['artist_id'];
				$genure_id=$row['genre_id'];
			?>
			<tr align="center">
				<td class="songs" width="20"><?php echo $song_id; ?></td>
				<td class="songs" width="70"><?php echo $song_name; ?></td>
				<td class="songs" width="40"><?php echo $song_price; ?></td>
				<td class="songs" width="50"><img src="album_images/<?php echo $song_picture; ?>" width="50" height="40"></td>
				<td class="songs" width="30"><?php echo $album_id; ?></td>
				<td class="songs" width="30"><?php echo $artist_id; ?></td>
				<td class="songs" width="1"><?php echo $genure_id; ?></td>
				<td class="songs" width="1"><a class="blue" href="edit_song.php?edit=<?php echo $song_id; ?>">Update</a></td>
			</tr>
			<?php } ?>
				
				
		</table>
		
	</body>
	</div>
<</html>