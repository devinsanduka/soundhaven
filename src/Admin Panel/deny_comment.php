<?php
   require("connect.php");
   if(isset($_GET['del']))
   { 
   	$delete_id=$_GET['del'];
	$delete_query="delete from comment where comment_id='$delete_id' ";
    if(mysql_query($delete_query))
	{
		echo "<script>alert ('Comment has been Denied')</script>";
		echo "<script>location.reload('comments_admin.php','self')</script>";
   		
	}
	else {
		echo "<script> alert('Deleting was Unsuccessful !!!') </script>";
	}
   }
	
?>