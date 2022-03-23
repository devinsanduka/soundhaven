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
			<form method="post" action="insert_artist.php" enctype="multipart/form-data">
				<table width="800" align="center" style="border-radius: 5; position: relative;" bgcolor="black">
					<tr>
						<td align="cener" colspan="6" style="background-color: black;">
							<h1 align="center">Insert Artist Here</h1>
						</td>
					</tr>
					<tr>
						<td align="right">Artist Name :</td>
						<td align="center"><input  type="text" name="artist_name"size="40" required /></td>
					</tr>
					<tr>
						<td align="right"> Artist Bio :</td>
						<td align="center"><textarea name="artist_bio" cols="30" rows="6"></textarea></td>
					</tr>
					<tr>
						<td align="right">Picture :</td>
						<td align="left" style="padding-left: 20%;"><input type="file" name="picture" /></td>
					</tr>
					<tr></tr>
					<tr></tr>
					<tr></tr>
					<tr></tr>
					<tr>
						<td align="center" colspan="6"><input type="submit" name="submit" value="Insert Now" style="background-color: rgb(2,81,145);border-radius: 4px;cursor: pointer;color: white;" /></td>
					</tr>
				</table>
			</form>
		</div>
	</body>
</html>

<?php
require ("connect.php");
if(isset($_POST['submit']))
{
	$artist_name=$_POST['artist_name'];
	$artist_bio=$_POST['artist_bio'];
	$picture=$_FILES['picture']['name'];
	$picture_temp=$_FILES['picture']['tmp_name'];
	$error=$_FILES ['picture']['error'];
	if($error>0)
	{
		die("Error Uploading File ! Code $error");
	}
else{

	move_uploaded_file( $picture_temp,"artist_images/$picture");
	$insert_artist="insert into artist (artist_name,artist_pic,artist_bio) values ('$artist_name','$picture','$artist_bio')";
	$upload_artist=mysql_query($insert_artist);
	if($upload_artist=TRUE){
		echo "<script>alert('Artist has been Uploaded Successfully !!!')</script>";
		//echo "<script> window.open('artist.php','self',false) </script>";
		header("Location:artist.php");
	}
else{
  		echo "<script> alert('Artist Uploading Unsuccessful !!!') </script>";
		echo mysql_error();
}
}
}
?>
