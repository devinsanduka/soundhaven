<!DOCTYPE  html>
<html>
	<head>
		<title>Admin Panel</title>
		<link rel="stylesheet" type="text/css" href="admin.css" />
	</head>
	<div id="container" >
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
			<div style="margin-left: 22%;">
		<table width="1000" border="5"align="center">
			<tr>
				<td colspan="11" align="center">
					<h2>Customer Information</h2>
				</td>
			</tr>
			<tr>
				<th style="background-color: rgb(87,87,87);">Customer ID</th>
				<th style="background-color: rgb(87,87,87);">First Name</th>
				<th style="background-color: rgb(87,87,87);">Last Name</th>
				<th style="background-color: rgb(87,87,87);">E-mail</th>
				<th style="background-color: rgb(87,87,87);">Gender</th>
				<th style="background-color: rgb(87,87,87);">Address</th>
				<th style="background-color: rgb(87,87,87);">Country</th>
				<th style="background-color: rgb(87,87,87);">Mobile</th>
				<th style="background-color: rgb(87,87,87);">Delete User</th>
			</tr>
	<?php
	require("connect.php");
	$query="select * from customer";
	$run=mysql_query($query);
	while($row=mysql_fetch_array($run)){
		$user_id=$row['customer_id'];
		$user_fname=$row['fname'];
		$user_lname=$row['lname'];
		$user_email=$row['email'];
		$user_gender=$row['gender'];
		$user_address=$row['address1'];
		$user_country=$row['country'];
		$user_mobile=$row['mobile'];
		
	?>
	<tr align="center">
				<td><?php echo $user_id; ?></td>
				<td><?php echo $user_fname; ?></td>
				<td><?php echo $user_lname; ?></td>
				<td><?php echo $user_email; ?></td>
				<td><?php echo $user_gender; ?></td>
				<td><?php echo $user_address; ?></td>
				<td><?php echo $user_country; ?></td>
				<td><?php echo $user_mobile; ?></td>
				<td><a class="blue" href="delete_user.php?del=<?php echo $user_id; ?>">Delete</a></td>
			</tr>
	<?php }?>		
		</table>
		</div>
		
	</body>
	</div>
</html>