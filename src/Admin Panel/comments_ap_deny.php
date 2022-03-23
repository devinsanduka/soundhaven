<?php
require("connect.php");

if(isset($_GET['deny']))
{
	$comment_idd=$_GET['deny'];
	$query_deny="delete from comment where comment_id='$comment_idd'";
	$run_query_deny=mysql_query($query_deny);
	if($run_query_deny==TRUE)
	{
		echo "<script> alert('Comment has been Denied !!!') </script>";
		header("Location:comments_admin.php");
	}
	else {
		echo "<script> alert('Denying Unsuccessful !!!') </script>";
		echo "<script> window.open('comments_admin.php','_self',FALSE)</script>";
		
	}
}

?>

