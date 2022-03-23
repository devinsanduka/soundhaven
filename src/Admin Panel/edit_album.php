
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
$album_id=$album_name=$album_desc=$album_price=$album_image=$genre=$album_artist="";
if(isset($_GET['edit_a'])){
	
$update_id=$_GET['edit_a'];
$query="select * from album where album_id='$update_id'";
$run_query=mysql_query($query);
while($update=mysql_fetch_array($run_query))
{
	$album_id=$update['album_id'];
	$album_name=$update['album_name'];
	$album_desc=$update['album_desc'];
	$album_price=$update['album_price'];
	$album_image=$update['album_image'];
	$genre=$update['genre_ID'];
	$album_artist=$update['artist_id'];
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
		<div id="content">
			<form method="post" action="edit_album.php?edit_form=<?php echo $update_id; ?>" enctype="multipart/form-data">
				<table width="800" align="center" style="border-radius: 5; position: relative;background-color: black;">
					<tr>
						<td align="cener" colspan="6" >
							<h1>Update Album</h1>
						</td>
					</tr>
					<tr>
						<td align="right">
							Album ID 
						</td>
						<td><?php echo $album_id; ?></td>
					</tr>
					<tr>
						<td align="right">Album Name </td>
						<td align="center"><input type="text" name="album_name" size="53" value="<?php echo $album_name; ?>"/></td>
					</tr>
					<tr>
						<td align="right">Album Description </td>
						<td align="center"><textarea name="album_desc" cols="40" rows="8"><?php echo $album_desc; ?></textarea></td>
					</tr>
					<tr>
						<td align="right"> Artist </td>
						<td align="left" style="padding-left: 14%;">
							<select name="artist" style="width: 76%;">
								<?php
									require ("connect.php");
									$this_query="select * from artist where artist_id='$album_artist'";
									$run_query=mysql_query($this_query);
									while($artist_query=mysql_fetch_array($run_query))
									{
										$artist_id=$artist_query['artist_id'];
										$artist_name=$artist_query['artist_name'];
										echo "<option value='$artist_id'>$artist_name</option>";
										
										$new_this_query="select * from artist where artist_id<>'$album_artist'";
										$run_this_query=mysql_query($new_this_query);
										while($row_this_query=mysql_fetch_array($run_this_query))
										{
											$artist_id=$row_this_query['artist_id'];
										$artist_name=$row_this_query['artist_name'];
										echo "<option value='$artist_id'>$artist_name</option>";
										}
									}
								
								?>
							</select>
							
						</td>
					</tr>
						<tr>
						<td align="right"> Genure Type </td>
						<td align="left" style="padding-left: 14%;">
							<select name="genre" style="width: 76%;">
								<?php
									$query="select * from genre where genre_id='$genre'";
									$run_query=mysql_query($query);
									while($genre_query=mysql_fetch_array($run_query))
									{
										$genre_id=$genre_query['genre_id'];
										$genre_name=$genre_query['genre_name'];
										echo "<option value='$genre_id'>$genre_name</option>";
										
										$more_query="select * from genre where genre_id<>'$genre'";
										$run_more_query=mysql_query($more_query);
										while($row_more_query=mysql_fetch_array($run_more_query))
										{
											$genre_more_id=$row_more_query['genre_id'];
										$genre_more_name=$row_more_query['genre_name'];
										echo "<option value='$genre_more_id'>$genre_more_name</option>";
										}
										
									}
								
								?>
							</select>
						</td>
					</tr>
					<tr>
						<td align="right">Album Price</td>
							<td align="center"><input type="text" name="album_price" size="54" value="<?php echo $album_price; ?>"/></td>
					</tr>
					<tr>
						<td align="right"> Picture </td>
							<td align="left" style="padding-left: 22%;"><input type="file" name="picture" size="40"/><img src="album_images/<?php echo $album_image; ?>" width="90" height="75" /></td>
					</tr>
					
					
					<tr>
						<td align="center" colspan="6"><input type="submit" name="update_this" value="Update" style="background-color: rgb(2,81,145);border-radius: 4px;cursor: pointer;color: white;position: relative; margin-top: 5% ; width: 10%; "/>
						<input type="submit" name="delete" value="Delete" style="background-color: rgb(2,81,145);border-radius: 4px;cursor: pointer;color: white;position: relative; margin-top: 5%; margin-left: 3%; width: 10%; " />	
						</td>
					</tr>
				</table>
			</form>
		</div>
	</body>
	</div>
</html>
<?php
if(isset($_POST['update_this']))
{
	$update_id=$_GET['edit_form'];
	$album_name=$_POST['album_name'];
	$album_price=$_POST['album_price'];
	$album_desc=$_POST['album_desc'];
	$artist=$_POST['artist'];
	$genre1=$_POST['genre'];
	$picture=$_FILES['picture']['name'];
	$picture_temp=$_FILES['picture']['tmp_name'];
	
	 move_uploaded_file( $picture_temp,"album_images/$picture");
	$update_album="update album set album_name='$album_name',album_price='$album_price',album_image='$picture',album_desc='$album_desc',artist_id='$artist',genre_ID='$genre1' where album_id='$update_id' ";
	$upload_album= mysql_query($update_album);
	if($upload_album=TRUE){
		echo "<script>alert('Album has been Updated Sucessfully !!!')</script>";
		//echo "<script> window.open('albums.php','self',false) </script>";
		header("Location:albums.php");
		}
	else {
		echo "<script>alert('Update Unsucessful !!!') </script>";
		echo  mysql_error();
	}
}

if(isset($_POST['delete']))
{
	$update_id1=$_GET['edit_form'];
	$delete_query="delete from album where album_id='$update_id1'";
	$run_delete_query= mysql_query($delete_query);
	if($run_delete_query==TRUE)
	{
		echo "<script> alert ('Album has been Deleted ') </script>";
		header("Location:songs.php");
	}
	else {
		echo "<script> alert('Deleting Unsuccessful !') </script>";
		echo "<script> window.open('edit_album.php','self',false) </script>";
		 exit();
	}
}


?>


