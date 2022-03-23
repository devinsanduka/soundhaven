<?php
require ("connect.php");
?>
<!DOCTYPE  html>
<html>
	<head>
		<title>Admin Panel</title>
		<link rel="stylesheet" type="text/css" href="admin.css" />
	</head>
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
						<input type="text" size="30%" placeholder="Search Here"  name="find" />
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
		<div id="content">
			<form method="post" action="upload_songs.php" enctype="multipart/form-data">
				<table width="800" align="center" style="border-radius: 5; position: relative;" bgcolor="black">
					<tr>
						<td align="center" colspan="6" style="background-color: black;">
							<h1 align="center">Upload Songs Here</h1>
						</td>
					</tr>
					<tr>
						<td align="right">Song Name :</td>
						<td align="center"><input  type="text" name="song_name"size="40" required /></td>
					</tr>
					<tr>
						<td align="right">Price :</td>
						<td align="center"><input type="text" name="price"size="40" required /></td>
					</tr>
					<tr>
						<td align="right">Album :</td>
						<td align="left" style="padding-left: 18%;">
							<select name="album" style="width: 65%;">
								<option value="null">Select Album</option>
								<?php
									require ("connect.php");
									$this_query="select * from album order by album_name";
									$run_query=mysql_query($this_query);
									while($album_query=mysql_fetch_array($run_query))
									{
										$album_id=$album_query['album_id'];
										$album_name=$album_query['album_name'];
										echo "<option value='$album_id'>$album_name</option>";
									}
								
								?>
							</select>
							
						</td>
					</tr>
					<tr>
						<td align="right">Artist :</td>
						<td align="left" style="padding-left: 18%;">
							<select name="artist" style="width: 65%;">
								<option value="null">Select Artist</option>
								<?php
									require ("connect.php");
									$this_query="select * from artist order by artist_name";
									$run_query=mysql_query($this_query);
									while($artist_query=mysql_fetch_array($run_query))
									{
										$artist_id=$artist_query['artist_id'];
										$artist_name=$artist_query['artist_name'];
										echo "<option value='$artist_id'>$artist_name</option>";
									}
								
								?>
							</select>
							
						</td>
					</tr>
					<tr>
						<td align="right"> Genure Type :</td>
						<td align="left" style="padding-left: 18%;">
							<select name="genre" style="width: 65%;">
								<option value="null"> Select Genre</option>
								<?php
									require ("connect.php");
									$query="select * from genre order by genre_name";
									$run_query=mysql_query($query);
									while($genre_query=mysql_fetch_array($run_query))
									{
										$genre_id=$genre_query['genre_id'];
										$genre_name=$genre_query['genre_name'];
										echo "<option value='$genre_id'>$genre_name</option>";
									}
								
								?>
							</select>
						</td>
					</tr>
					<tr>
						<td align="right"> Choose a Song :</td>
						<td align="left" style="padding-left: 18%;"><input type="file" name="file" size="40" required style="position: absolute;"/></td>
					</tr>
					<tr></tr>
					<tr></tr>
					<tr></tr>
					<tr>
						<td align="center" colspan="6"><input type="submit" name="submit" value="Upload Now" style="background-color: rgb(2,81,145);border-radius: 4px;cursor: pointer;color: white;" /></td>
					</tr>
				</table>
			</form>
		</div>
	</body>
</html>

<?php
if(isset($_POST['submit']))
{
	$song_name=$_POST['song_name'];
	$song_price=$_POST['price'];
	$song_album=$_POST['album'];
	$artist=$_POST['artist'];
	$genre=$_POST['genre'];
    $song=$_FILES['file']['name'];
   $song_type=$_FILES['file']['type'];
    $song_size=$_FILES['file']['size'];
    $song_temp=$_FILES ['file']['tmp_name']; 
	 $error=$_FILES ['file']['error'];
	if($error>0)
	{
		die("Error Uploading File ! Code $error");
	}
else{

	move_uploaded_file($song_temp,"songs/$song" );
	$insert_songs="insert into song (song_name,song_price,artist_id,genre_id,album_id) values ('$song_name','$song_price','$artist','$genre','$song_album')";
	$upload_songs=mysql_query($insert_songs);
	if($upload_songs==TRUE){
		echo "<script>alert('Song has been Uploaded Sucessfully !!!')</script>";
		echo "<script> window.open('upload_songs.php','self',false) </script>";
	}
	else {
		echo "<script>alert('Upload Unsucessful !!!') </script>";
		echo mysql_error();
	}
}
}
?>

