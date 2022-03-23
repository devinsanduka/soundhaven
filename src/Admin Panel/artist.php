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
		<table width="1000" border="0"align="center">
			<tr>
				<caption colspan="10" align="center">
					<h1 style="color: white;font-size:220%;">Artists</h1>
				</caption>
			</tr>
			<tr>
				<th style="background-color: rgb(87,87,87);">Artist ID</th>
				<th style="background-color: rgb(87,87,87);">Artist Name</th>
				<th style="background-color: rgb(87,87,87);">Artist Picture</th>
				<th style="background-color: rgb(87,87,87);">Artist Bio</th>
				<th style="background-color: rgb(87,87,87);">Update</th>
			</tr>
			<?php
			require("connect.php");
			$query="select * from artist ";
			$run=mysql_query($query);
			while($row=mysql_fetch_array($run))
			{
				$artist_id=$row['artist_id'];
				$artist_name=$row['artist_name'];
				$artist_picture=$row['artist_pic'];
				$artist_bio=substr($row['artist_bio'],0,100);
			?>
			<tr align="center">
				<td class="songs" width="20"><?php echo $artist_id; ?></td>
				<td class="songs" width="70"><?php echo $artist_name; ?></td>
				<td class="songs" width="50"><img src="artist_images/<?php echo $artist_picture; ?>" width="50" height="40"></td>
				<td class="songs" width="30"><?php echo $artist_bio; ?></td>
				<td class="songs" width="1"><a class="blue" href="edit_artist.php?edit_ar=<?php echo $artist_id; ?>">Update</a></td>
			</tr>
			<?php } ?>
				
				
		</table>
		
	</body>
	</div>
<</html>