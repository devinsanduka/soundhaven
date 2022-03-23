<!DOCTYPE html>
<html>
	<head>
		
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
	
		<center><h1>Shopping Cart Test Values</h1></center>
		
		<?php
include("connect.php");

$select_cart = "select * from song";
$run_cart = mysql_query($select_cart);
$sub_total=0;

while ($row=mysql_fetch_array($run_cart)) {
	
	$cart_id  = $row['song_id'];
	$cart_name  = $row['song_name'];
	$cart_price  = $row['song_price'];
	$cart_picture  = $row['song_picture'];
	
	$sub_total = $row['song_price'] + $sub_total;
	
?>






 <center><table  class="ship_cart">
			
			<tr>
				<th rowspan="3" style="width: 100px;border: 0px;padding: 5px;margin: px">
					<img src="<?php echo $cart_picture; ?>" width:100px height=100px>
				</th>
				<th colspan="2" style="width: 500px">
					<a href="#" style="text-decoration: none;text-align: left;color:black"><?php echo"$cart_name"?></a>
				</th>
				
				<th style="cursor: pointer;width: 10px"><img class="cross" src="cross.jpg" width:20px height=20px</th>
			</tr>
			
			<tr>
				<td style="width: 500px">
					short description..
				</td>
				
				
				
				<td colspan="2" style="width:10px">
					<b>US $<?php echo"$cart_price"?></b>
				</td>
				<td>
					<form id="form1" name="form1" method="post" action="content.php">
						<input type="hidden" name="pid" id="pid" value="<?php echo $cart_id;?>"/>
						<input type="submit" name="button" id="button" value="Add to Shopping Cart"/>
					</form>
					
				</td>
			
			</table ></center>
			
		<?php } ?>
			
			<br/><br/><br/>
			
			<hr style="border-color: #4fccc6">
			<table style="background: transparent;">
				
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