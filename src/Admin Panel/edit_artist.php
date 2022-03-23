
<!DOCTYPE  html>
<html>
	<head>
		<title>Admin Panel</title>
		<link rel="stylesheet" type="text/css" href="admin.css" />
	</head>
	<div id="container">
	<body>
		<?php
require("connect.php");
$artist_id=$artist_name=$artist_picture=$artist_bio="";
if(isset($_GET['edit_ar'])){
$update_id=$_GET['edit_ar'];
$query="select * from artist where artist_id='$update_id'";
$run_query=mysql_query($query);
while($update=mysql_fetch_array($run_query))
{
	$artist_id=$update['artist_id'];
	$artist_name=$update['artist_name'];
	$artist_picture=$update['artist_pic'];
	$artist_bio=$update['artist_bio'];
}
}



if(isset($_POST['update_this']))
{
	$update_id=$_GET['edit_form_artist'];
	$artist_name=$_POST['artist_name'];
	$artist_bio=$_POST['bio'];
	$picture=$_FILES['artist_picture']['name'];
	$picture_temp=$_FILES['artist_picture']['tmp_name'];
	$update_artist="update artist set artist_name='$artist_name',artist_pic='$picture',artist_bio='$artist_bio' where artist_id='$update_id' ";
	$upload_artist=mysql_query($update_artist);
	if($upload_artist==TRUE){
		echo "<script>alert('Artist has been Updated Sucessfully !!!')</script>";
		echo "<script> window.open('artist.php','_self',false) </script>";
		move_uploaded_file($picture_temp,"artist_images/$picture");
		
		}
	else {
		echo "<script>alert('Update Unsucessful !!!') </script>";
		echo "<script> window.open('edit_artist.php','_self',false) </script>";
	}
}
if(isset($_POST['delete']))
{
	$update_id1=$_GET['edit_form_artist'];
	$delete_query="delete from artist where artist_id='$update_id1'";
	$run_delete_query=mysql_query($delete_query);
	if($delete_query==TRUE)
	{
		echo "<script> alert ('Artist has been Deleted ') </script>";
		echo "<script> window.open('artist.php','_self',false) </script>";
	}
	else {
		echo "<script> alert('Deleting Unsuccessful !') </script>";
		echo "<script> window.open('edit_artist.php','_self',false) </script>";
	}
}



?>

		
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
		<div id="search" style="margin-top: 3%;">
			<table>
				<td width="24%" align="right" style="background: transparent;" ><form><input type="text" size="30%" placeholder="Search Here" /><input type="button" style="background: url(search.jpg);"/>
				</form></td>
			</table>
		</div>
		<div id="content">
			<form method="post" action="edit_artist.php?edit_form_artist=<?php echo $update_id; ?>" enctype="multipart/form-data" >
				<table width="800" align="center" style="border-radius: 5; position: relative;background-color: black;">
					<tr>
						<td align="cener" colspan="6" >
							<h1>Update Artist</h1>
						</td>
					</tr>
					<tr>
						<td align="right">
							Artist ID 
						</td>
						<td><?php echo $artist_id; ?></td>
					</tr>
					<tr>
						<td align="right">Artist Name </td>
						<td align="center"><input type="text" name="artist_name" placeholder="Artist Name" size="40" value="<?php echo $artist_name; ?>"/></td>
					</tr>
					<tr>
						<td align="right"> Picture </td>
							<td align="left" style="padding-left: 22%;"><input type="file" name="artist_picture" placeholder="Picture" size="40"/><img src="artist_images/<?php echo $artist_picture; ?>" width="90" height="75" /></td>
					</tr>
					<tr>
						<td align="right">Bio </td>
						<td align="left" style="padding-left: 22%;"><textarea name="bio" cols="40" rows="8"><?php echo $artist_bio; ?></textarea></td>
					</tr>
					
					
					<tr>
						<td align="center" colspan="6"><input type="submit" name="update_this" value="Update" style="background-color: rgb(2,81,145);border-radius: 4px;cursor: pointer;color: white;position: relative; margin-top: 5%;width: 10%; " />
						<input type="submit" name="delete" value="Delete" style="background-color: rgb(2,81,145);border-radius: 4px;cursor: pointer;color: white;position: relative; margin-top: 5%; margin-left: 3%; width: 10%; " />	
						</td>
					</tr>
				</table>
			</form>
		</div>
	</body>
	</div>
</html>

