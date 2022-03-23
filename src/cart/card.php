
	

 <?php 
  $nameErr=$visaErr=$cvvErr="";
  
  $con=mysqli_connect('localhost', 'root','','soundhaven');
  $query="select* from card";
  $result=mysqli_query($con, $query);
 while( $row=mysqli_fetch_assoc($result)){
  
  
	  		if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$name=$_POST['contact_name'];
		$visa=$_POST['visa'];
		$cvv=$_POST['cvv'];
		
		if($name!=$row['user_name'])
		{
			echo "<script>alert('invalid name')</script>";
			
		}
		else if($visa!=$row['user_cardno'])
		{
			echo "<script>alert('invalid cardno')</script>";
		}
		else if($cvv!=$row['user_cvv'])
		{
			echo "<script>alert('invalid Invalid CVV')</script>";
		}
		else {
			header("location:download.php");
		}
		
	}
  
 }
   
 ?> 
 
 
<!DOCTYPE html>  
<html>  
<head>  
	
 <link rel="stylesheet" type="text/css" href="cart.css">
  
<title>JavaScript form validation - checking non-empty</title>  
<!--<link rel='stylesheet' href='form-style.css' type='text/css' /> -->
<!--<link rel="stylesheet" type="text/css" href="cart.css"> -->   
</head><br><body onload='document.shipdd.text1.focus()'>  





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





<center><h1>Credit Card Validation</h1></center>
<p>&nbsp;</p>
<center>
	
	<form method="post" name="shipdd" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<table style="margin-bottom: 150px;font-size: 25px" class="ship_cart" >
			<tr>
				<td>contact name</td>
				<td><input type="text" name="contact_name" placeholder="name" required/></td><span><?php echo $nameErr;?></span></td>
			</tr>
			<tr>
				<td>visa</td>
				<td><input type="text" name="visa"placeholder="cardno" required/><?php echo $visaErr;?></td>
			</tr>
			<tr>
				<td>cvv</td>
				<td><input type="text" name="cvv" maxlength="3" placeholder="cvv" size="4" required/><?php echo $cvvErr;?></td>
			</tr>
			<tr>
				<td>Expire Date</td>
				<td>
					Month: <select name="ExpMon" id="ExpMon" title="select a month"> 
        <option value="1">Jan</option> 
        <option value="2">Feb</option> 
        <option value="3">Mar</option>
        <option value="4">Apr</option> 
        <option value="5">May</option> 
        <option value="6">June</option> 
        <option value="7">July</option> 
        <option value="8">Aug</option> 
        <option value="9">Sept</option> 
        <option value="10">Oct</option> 
        <option value="11">Nov</option> 
        <option value="12">Dec</option> 
 </select>      

 Year:
 <select name="ExpYear" id="ExpYear" title="select a year"> 
     <option value="2014">2014</option> 
     <option value="2015">2015</option> 
     <option value="2016">2016</option> 
     <option value="2017">2017</option>
     <option value="2018">2018</option> 
     <option value="2019">2019</option>
</select>

<input type="button" value="Check Date" onclick="CheckDate();"  />
					
					
				</td>
			</tr>
			<tr>
				<td><center><input type="button" onclick="location.href = 'payment_method.php';" value="back" class="css_button"/></center></td>
				<td><center><input type="submit" class="css_button"  onclick="CheckDate()"/></center></td>
				
			</tr>
		</table>
	</form>
</center>










<script src="credit-card-visa-validation.js"></script> 








 </table></center>
                
   
      <br/><br/><br/>
			
			<hr style="border-color: #4fccc6">
			<div align="bottom" style="margin-bottom: 0px;">
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
		</div>
</body>  
</html> 