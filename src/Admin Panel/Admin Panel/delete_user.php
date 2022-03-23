<?php
   require("connect.php");
   if(isset($_GET['del']))
   { 
   	$delete_id=$_GET['del'];
	$delete_query="delete from customer where customer_id='$delete_id' ";
    if(mysql_query($delete_query))
	{
		echo "<script>alert ('Customer has been Deleted')</script>";
		echo "<script> window.open('user_info.php','self',false)</script>";
   		
	}
	else {
		echo "<script> alert('Deleting was Unsuccessful !!!') </script>";
	}
   }
	
?>

<script>
	
</script>