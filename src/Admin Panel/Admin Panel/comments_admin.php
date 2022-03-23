<!DOCTYPE  html>
<html>
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
		<form method="post" action="comments_ap_deny.php">
		<table width="1000" border="0"align="center">
			<tr>
				<caption colspan="10" align="center">
					<h1 style="color: white;font-size:220%;">Pending Comments</h1>
				</caption>
			</tr>
			<tr>
				<th style="background-color: rgb(87,87,87);">Name</th>
				<th style="background-color: rgb(87,87,87);">E-mail</th>
				<th style="background-color: rgb(87,87,87);">Comment</th>
				<th style="background-color: rgb(87,87,87);">comment ID</th>
				
				<th style="background-color: rgb(87,87,87);">Approve</th>
				<th style="background-color: rgb(87,87,87);">Deny</th>
			</tr>
			
			<?php
			require("connect.php");
			$query="select * from comment";
			$run=mysql_query($query);
			while($row=mysql_fetch_array($run))
			{
				$name=$row['name'];
				$email=$row['email'];
				$comment=$row['comment'];
				$comment_id=$row['comment_id'];
				
				?>
			<tr align="center">
				<td class="comnt" width="30"><?php echo $name; ?></td>
				<td class="comnt" width="70"><?php echo $email; ?></td>
				<td class="comnt" width="40"><?php echo $comment; ?></td>
				<td class="comnt" width="20"><?php echo $comment_id; ?></td>
				
				
				<td><a style="color: red;" href="comments_admin.php?approved=<?php echo $comment_id; ?>">Approve</a></td>
				<td><a  style="color:green;" href="comments_ap_deny.php?deny=<?php  echo $comment_id; ?>">Deny </a></td>
				
				
			</tr>
			<?php } ?>
				
				
		</table>
		</form>
		
	</body>
	</div>
</html>

<?php

require("connect.php");
$name1=$email1=$comment1="";
if(isset($_GET['approved']))
{
	$comment_id=$_GET['approved'];
	$name1=$name;
	$email1=$email;
	$comment1=$comment;
	$query="insert into approved_comments (name,email,comment,comment_id) values ('$name1','$email1','$comment1','$comment_id')";
	$run_query=mysql_query($query);
	$query1="delete from comment where comment_id='$comment_id'";
	$run_query1=mysql_query($query1);
	if($run_query==TRUE)
	{
		echo "<script> alert ('Comment Approved !')</script>";
		header("Location:comments_admin.php");
	}
	else {
		echo "<script> alert ('Comment Approving was Unsuccessful !')</script>";
		echo "<script> window.open('comments_admin.php','_self',FALSE) </script>";
		echo mysql_error();	
	}
}


?>
