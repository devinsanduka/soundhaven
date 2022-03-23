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
			<h2><a  href="#">View Comments</a></h2>
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
			<form method="post" action="upload_albums.php" enctype="multipart/form-data">
				<table width="800" align="center" style="border-radius: 5; position: relative;" bgcolor="black">
					<tr>
						<td align="cener" colspan="6" style="background-color: black;">
							<h1 align="center">Upload Albums Here</h1>
						</td>
					</tr>
					<tr>
						<td align="right">Album Name :</td>
						<td align="center"><input  type="text" name="album_name"size="40" required /></td>
					</tr>
					<tr>
						<td align="right">Description :</td>
						<td align="center"><textarea name="album_desc" cols="30" rows="6"></textarea></td>
					</tr>
					<tr>
						<td align="right">Price :</td>
						<td align="center"><input type="text" name="price" size="40" required /></td>
					</tr>
					<tr>
						<td align="right">Genure Type :</td>
						<td align="left" style="padding-left: 17%;">
							<select name="genre" style="width: 66%;">
								<option value="null">Select Genre</option>
								<?php
									require ("connect.php");
									$query="select * from genre";
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
						<td align="right">Artist :</td>
						<td align="left" style="padding-left: 17%;">
							<select name="artist" style="width: 66%;">
								<option value="null">Select Artist</option>
								<?php
									require ("connect.php");
									$query="select * from artist order by artist_name";
									$run_query=mysql_query($query);
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
						<td align="right">Picture :</td>
						<td align="left" style="padding-left: 17%;"><input type="file" name="picture" style="position: absolute;" /></td>
					</tr>
					<tr>
						<td align="right">Choose a Album :</td>
						<td align="left" style="padding-left: 17%;"><input type="file" name="file" size="40" style="position: absolute;" required/></td>
					</tr>
					<tr></tr>
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
	$album_name=$_POST['album_name'];
	$album_desc=$_POST['album_desc'];
	$album_genre=$_POST['genre'];
	$artist=$_POST['artist'];
	$album_price=$_POST['price'];
	$picture=$_FILES['picture']['name'];
	$picture_temp=$_FILES['picture']['tmp_name'];
    $album=$_FILES['file']['name'];
    $album_type=$_FILES['file']['type'];
   $album_size=$_FILES['file']['size'];
    $album_temp=$_FILES ['file']['tmp_name']; 
	 $error=$_FILES ['file']['error'];
	if($error>0)
	{
		die("Error Uploading File ! Code $error");
	}
else{

	move_uploaded_file( $picture_temp,"album_images/$picture");
	move_uploaded_file($album_temp,"C:/Users/Diyathni7/Dropbox/$album" );
	$insert_albums="insert into album (album_name,genre_ID,album_desc,album_price,album_image,artist_id) values ('$album_name','$album_genre','$album_desc','$album_price','$picture','$artist')";
	$upload_albums=mysql_query($insert_albums);
	if($upload_albums==TRUE){
		echo "<script>alert('Album has been Uploaded Successfully !!!')</script>";
		echo "<script> window.open('upload_albums.php','self',false) </script>";
		}
else {
	echo "<script>alert('Upload Unsuccessful !!!')</script>";
	echo mysql_error();
}
}
}
?>
