<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="cart.css">
		<title>Checkout: Review Order</title>
		
	<script>
		var radios = document.getElementsByName('Pay');

ffor (var i = 0, length = radios.length; i < length; i++) {
    if (radios[i].checked) {
        // do whatever you want with the checked radio
        alert(radios[i].value);

        // only one radio can be logically checked, don't check the rest
        break;
    }
}
	</script>
		
		
	</head>
	<body>
		<form method="post" action="">
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
		<h1 align="center" class="header">Checkout: Review Order</h1>
		<form method="post" action="#">
		<center><table class="ship_cart" >
			<tr>
				<th style="width: 400px;color:black; font-size: 30px;font-family: cursive" colspan="2">Select Payment Method</th>
				
				<th></th>
			<tr>
				<td colspan="3"><hr></td>
				
				
			</tr>
			<tr>
				<td>1) Visa Card </td>
				<td><img src="visa-logo_full.jpeg" width="160px" height="77px" /></td>
				<td>
					<input type="radio" name="pay"  value="0" onclick="window.location='card.php';"/>
				</td>
			</tr>
			<tr>
				<td>2) Pay pal</td>
				<td>
					
					<img src="paypal_logo1.png" width="160px" height="77px"/></td>
				</td>
				<td>
					<input type="radio" name="pay" value="1" onclick="window.location='card.php';" />
				</td>
			</tr>
			<td colspan="2" ><center><input type="button" onclick="location.href = 'shipping.php';"  style="margin-left: 50px" value="Back" class="css_button" /></center></td>
			
			<td></td>
			<!--<tr><td><input type="button" onclick="location.href = 'shipping.php';"  style="margin-left: 50px"  value="Ship Now" class="css_button" /><input type="button" name="back" class="css_button"  value="Download Now" style="margin-left: 300px" onclick="content.php"/></td>-->
				
				
			</tr>
		</table></center>
		</form>
		<center><a href="content.php" style="font-size: 20px;color: white">Back to Cart</a></center>
		<p>&nbsp;</p>
	
		</div>
		
		
		
		
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