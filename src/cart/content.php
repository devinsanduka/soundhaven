<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="cart.css">
		<script src="jquery-1.11.1.js"></script>
	</head>
	<body>
		<table width="98.5%">
					<tr align="center">
						<td width="10%"><a href="index.html"><img src="Resources/home.jpg" onmouseover="this.src='Resources/home_over.jpg'" onmouseout="this.src='Resources/home.jpg'"></a></td>
						<td width="10%"><a href="browse.html"><img src="Resources/browse.jpg" onmouseover="this.src='Resources/browse_over.jpg'" onmouseout="this.src='Resources/browse.jpg'"></a></td>
						<td width="10%"><a href="charts.html"><img src="Resources/charts.jpg" onmouseover="this.src='Resources/charts_over.jpg'" onmouseout="this.src='Resources/charts.jpg'"></a></td>		
						<td width="10%"><a href="mycart.html"><img src="Resources/mycart.jpg" onmouseover="this.src='Resources/mycart_over.jpg'" onmouseout="this.src='Resources/mycart.jpg'"></a></td>
						<td width="10%"><a href="myaccount.html"><img src="Resources/myaccount.jpg" onmouseover="this.src='Resources/myaccount_over.jpg'" onmouseout="this.src='Resources/myaccount.jpg'"></a></td>
						<td width="10%"><a href="user_login_session.php"><img src="Resources/signin.jpg" onmouseover="this.src='Resources/signin_over.jpg'" onmouseout="this.src='Resources/signin.jpg'"></a></td>
						<td width="24%"><form class="search"><input class="s_text" type="text" size="30%" /><input class="s_button" type="submit" style="background-image: "test.jpeg""/></form></td>
					</tr>
				</table>	
	<center><h1 class="header">Shopping Cart</h1></center>
	
	


<?php
session_start();
include("connect.php");

 

error_reporting(E_ALL);
ini_set('display_errors', '1');

?>

<?php
if(isset($_POST['pid'])){
	$pid = $_POST['pid'];
	
	$wasFound=false;
	$i=0;
	
	if(!isset($_SESSION["cart_array"])||count($_SESSION["cart_array"])<1){
		$_SESSION["cart_array"]=array(0=>array("item_id"=>$pid,"quantity"=>1));  
	}else{
		
		foreach($_SESSION["cart_array"]as $each_item){
			$i++;
			while(list($key,$value)=each($each_item)){
				if($key=="item_id" && $value==$pid){
				array_splice($_SESSION["cart_array"],$i-1,1,array(array("item_id"=>$pid,"quantity"=>$each_item['quantity']+1 )));
					if($each_item['quantity']>=1){
						echo '<script language="javascript">';
						echo 'alert("Item is already stored in your cart!")';
						echo '</script>';
						
					}
					$wasFound=true;
				}
			}
		}
		
		if($wasFound==false){
			array_push($_SESSION["cart_array"],array("item_id"=>$pid,"quantity"=>1));
		}
		
	}
		
	
}

?>

<?php
if(isset($_GET['cmd'])&& $_GET['cmd']=="emptycart"){
	unset($_SESSION["cart_array"]);
}
?>
<?php
if(isset($_POST['index_to_remove'])&& $_POST['index_to_remove']!=""){
	$key_to_remove = $_POST['index_to_remove'];
	if(count($_SESSION["cart_array"])<=1){
		unset($_SESSION["cart_array"]);
	}else{
		unset($_SESSION["cart_array"]["$key_to_remove"]);
		sort($_SESSION["cart_array"]);
	}
}
	$total=0;
?>




<?php
if(!isset($_SESSION["cart_array"])||count($_SESSION["cart_array"])<1){
	echo "<h2 align='center'>Your shopping Cart is empty!</h2>";
	echo"<center><a href='music_library.php' style='width:10%' class='customButton'>Go Back</a></center>";
}else{
	$i=0;

	foreach($_SESSION["cart_array"]as $each_item){
		
		$item_id = $each_item['item_id'];
		$sql =mysql_query("SELECT* FROM song WHERE song_id='$item_id' LIMIT 1");
		if($sql === FALSE) {
    die(mysql_error()); 
			}
		
		
		
		
		while($row=mysql_fetch_array($sql)){
			$song_name = $row["song_name"];
			$song_price = $row["song_price"];
			$song_picture = $row["song_picture"];
			$total=$total+$song_price;
			$count=count($_SESSION["cart_array"]);
			
			if(isset($row["album_desc"])){
				$description = $row["album_desc"];
				if (strlen($description) > 60)
					substr($description, 0, 60) . '...';
			}
			else {
				$description = "No Description";
			}
		}
		//echo "<h2>Cart Item $i</h2>";
		//echo "Item ID: ".$each_item["item_id"];
		//echo "<br/>";
		//echo "Item Quantity: ".$each_item["quantity"];
		//echo "<br/>";
	
	
		
			 
?>







 <center><table  class="ship_cart">
			
			<tr>
				<th rowspan="3" style="width: 100px;border: 0px;padding: 5px;margin: px">
					<img src="../Admin Panel/album_images/<?php echo $song_picture ?>" width:100px height=100px>
				</th>
				<th colspan="2" style="width: 500px">
					<a href="#" style="text-decoration: none;text-align: left;color:yellow"><?php echo$song_name?></a>
				</th>
				
				<th style="width: 10px"><?php echo'<form action="content.php"  method="POST"><input name="deleteBin".$item_id. type="submit" style="cursor: pointer" value="X"/><input name="index_to_remove" type="hidden" value="'.$i.'"/></form>' ?>
					<?php $i++;?>
					</th>
			</tr>
			
			<tr>
				<td style="width: 500px">
					<?php echo $description; ?>
				</td>
				
				
				
				<td colspan="2" style="width:10px">
					<b>US $<?php echo $song_price?></b>
				</td>
			
			</table ></center>
			
	
				
			
			
			
			
			
		<?php } ?>
		   <?php }?>
<?php
	if(isset($_SESSION["cart_array"])){
	

			echo"<center><table class='ship_cart' style='padding:5px;margin:50px'>";
			
			
			echo"<tr >";
				
				echo"<td >Sub Total (no of items :$count)</td>";
				
				echo"<td >$$total</td>";
				
			echo"</tr>";
			echo"<tr>";
			
				echo"<td >Discount</td>";
			
				echo"<td  >currently unavailable</td>";
			echo"</tr>";
			
			echo"<tr>";
			
				echo"<td ><b>Total</b></td>";
			
				echo"<td ><b>$$total</b></td>";
				
			echo"</tr>";
			echo"<tr>";
			
				
			echo"</tr>";


				echo"<tr>";
				
				echo"<td ><a href='music_library.php' class='customButton'>Continue Shopping</a></td>";
				echo"<td><a href='ship_choose.php' class='customButton'>Checkout</a></td>";
				
				
				echo"</tr>";
                	echo"<td colspan='2' style='align:right;' ><a href='content.php?cmd=emptycart' style='color:white;'>Remove All</a></td>";
					
					
					
					
					
					
					
					
					
					
					
					
					
                	 }
                	 
               
                	 $_SESSION['test'] = $total;
					 
					
                	 ?>
                	 
   </table></center>
                
   
      <br/><br/><br/><br/><br/><br />
			
			<hr style="border-color: #4fccc6">
			<table style="background: transparent; margin-top: 200px">
				
			<tr width="100%">
				<td style="margin-left: 30px; margin-right: 20px; padding-left: 40px; padding-right: 40px;"><p style="color: #9eaa3c;"><b>About Us</b></p></td>
				<td style="margin-left: 30px; margin-right: 30px; padding-left: 250px; padding-right: 250px;"><p style="color: #9eaa3c"><b>Forum</b></p></td>
				<td style="margin-right: 20px; margin-left: 30px; padding-left: 40px; padding-right: 40px;"><p style="color: #9eaa3c"><b>Help</b></p></td>
			</tr>
			<tr width="100%">
				<td style="margin-left: 30px; margin-right: 20px; padding-left: 40px; padding-right: 40px;">
					<a class="a2" href="about.html">About SoundHaven</a></br>
					<a class="a2" href="terms.html">Terms of Use</a></br>
					<a class="a2" href="privacy.html">Privacy Policy</a>
				</td>
				<td style="margin-left: 30px; margin-right: 30px; padding-left: 250px; padding-right: 250px;">				
					<a class="a2" href="messageboard.html">Message Board</a></br>
					<a class="a2"href="facebook.com/SoundHaven">SoundHaven on Facebook</a></br>
					<a class="a2"href="twitter.com/SoundHaven">SoundHaven on Twitter</a>
				</td>
				<td style="margin-right: 20px; margin-left: 30px; padding-left: 40px; padding-right: 40px;">				
					<a class="a2" href="contactus.html">Contact Us</a></br>
					<a class="a2" href="faq.html">FAQ</a>
				</td>
			</tr> 
		</table>        
                	
             	
                	
                	
                	
                	
			
                	

	</body>
</html>


