<!DOCTYPE html>
<html>
	<head>
		<script src="jquery-2.1.1.min.js"></script>
<script src="jquery-ui.js"></script>
<link rel="stylesheet" href="jquery-ui.css">
<script>
$(document).ready(function(){
$( "#hello" ).dialog({ autoOpen: false,minHeight: 200,minWidth:800 })
$( "#say_it" ).click(function() {
$( "#hello" ).dialog( "open" );
});
});
</script>
		
		
		
		
		
			
			
			
			<?php
			
			$country;
			$cname;
			
			
			if(isset($_POST['user_country']) && isset($_POST['cname']) && isset($_POST['address']) && isset($_POST['phone'])){
				//$_SESSION["country"] = $_POST['user_country'];
				//$_SESSION["cname"] =  $_POST['cname'];
				//$_SESSION["address"] = $_POST['address'];
				//$_SESSION["phone"] = $_POST['phone'];
				$country = $_POST['user_country'];
				$cname = $_POST['cname'];
				$address = $_POST['address'];
				$phone = $_POST['phone'];
			}
		
		?>
		
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
		<link rel="stylesheet" type="text/css" href="cart.css">
		<title>Checkout: Review Order</title>
	</head>
	<body>
		<h1 align="center" class="header">Checkout: Review Order</h1>
		<center><form method="post" action="payment_method.php" class="ship_cart">
		<table class="ship_cart">
			<tr>
				<th style="width: 400px;color:black">Ship to</th>
				<th style="width:200px; color:black">Pay with</th>
			</tr>
			<tr>
				<td colspan="2"><hr></td>
				
			</tr>
			<?php if(!isset($_POST['user_country']) && !isset($_POST['cname']) && !isset($_POST['address']) && !isset($_POST['phone'])){
				echo"<tr>";
				echo'<td style="color:white">Chathura Pathmasooriya</br>No:66 , Kurunegala Rd,</br>Chilaw,</br>Srilanka</br>0770530173</td>';
				echo'<td><img src="paypal.jpg" width="300px" height:"300px" style="margin: 2px;"</td>';
			echo"</tr>";}
else 	{
				
				 
			echo"<tr>";
				echo"<td style='color:white'>$cname,</br> $address,</br>$country,</br>$phone</td>";
				echo'<td><img src="paypal.jpg" width="300px" height:"300px" style="margin: 2px;"</td>';
			echo"</tr>";
		}
			?>
			<tr><td colspan="2">&nbsp;</td></tr>
			<tr>
				<td colspan="2"><input type="button" id="say_it" class="myButton" value="change address"/></td>
				
				
			</tr>
			<tr>
				<td><input type="button" name="back" class="css_button"  value="back" onclick="location.href = 'ship_choose.php';"/></td>
				<td><input type="submit"  class="css_button" value="submit" /></td>
			</tr>
		</table></center>
		
		<p>&nbsp;</p>
		
		</form>
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
		
		
		
		
		
		
		
		<div id="hello" title="Change Shipping Address">


		
		<form action="" method="post" name="shipdd">
			<table style="font-size: 12px" >
				<tr>
					<td class="ship"><h3>Country or region</h3></td>
					<td><select  name="user_country" >
					  <option value=""></option> 
					  <option value="United States">United States</option> 
					  <option value="United Kingdom">United Kingdom</option> 
					  <option value="Afghanistan">Afghanistan</option> 
					  <option value="Albania">Albania</option> 
					  <option value="Algeria">Algeria</option> 
					  <option value="American Samoa">American Samoa</option> 
					  <option value="Andorra">Andorra</option> 
					  <option value="Angola">Angola</option> 
					  <option value="Anguilla">Anguilla</option> 
					  <option value="Antarctica">Antarctica</option> 
					  <option value="Antigua and Barbuda">Antigua and Barbuda</option> 
					  <option value="Argentina">Argentina</option> 
					  <option value="Armenia">Armenia</option> 
					  <option value="Aruba">Aruba</option> 
					  <option value="Australia">Australia</option> 
					  <option value="Austria">Austria</option> 
					  <option value="Azerbaijan">Azerbaijan</option> 
					  <option value="Bahamas">Bahamas</option> 
					  <option value="Bahrain">Bahrain</option> 
					  <option value="Bangladesh">Bangladesh</option> 
					  <option value="Barbados">Barbados</option> 
					  <option value="Belarus">Belarus</option> 
					  <option value="Belgium">Belgium</option> 
					  <option value="Belize">Belize</option> 
					  <option value="Benin">Benin</option> 
					  <option value="Bermuda">Bermuda</option> 
					  <option value="Bhutan">Bhutan</option> 
					  <option value="Bolivia">Bolivia</option> 
					  <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option> 
					  <option value="Botswana">Botswana</option> 
					  <option value="Bouvet Island">Bouvet Island</option> 
					  <option value="Brazil">Brazil</option> 
					  
					  <option value="Brunei Darussalam">Brunei Darussalam</option> 
					  <option value="Bulgaria">Bulgaria</option> 
					  <option value="Burkina Faso">Burkina Faso</option> 
					  <option value="Burundi">Burundi</option> 
					  <option value="Cambodia">Cambodia</option> 
					  <option value="Cameroon">Cameroon</option> 
					  <option value="Canada">Canada</option> 
					  <option value="Cape Verde">Cape Verde</option> 
					  <option value="Cayman Islands">Cayman Islands</option> 
					  <option value="Central African Republic">Central African Republic</option> 
					  <option value="Chad">Chad</option> 
					  <option value="Chile">Chile</option> 
					  <option value="China">China</option> 
					  <option value="Christmas Island">Christmas Island</option> 
					  <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option> 
					  <option value="Colombia">Colombia</option> 
					  <option value="Comoros">Comoros</option> 
					  <option value="Congo">Congo</option> 
					   
					  <option value="Cook Islands">Cook Islands</option> 
					  <option value="Costa Rica">Costa Rica</option> 
					  <option value="Cote D'ivoire">Cote D'ivoire</option> 
					  <option value="Croatia">Croatia</option> 
					  <option value="Cuba">Cuba</option> 
					  <option value="Cyprus">Cyprus</option> 
					  <option value="Czech Republic">Czech Republic</option> 
					  <option value="Denmark">Denmark</option> 
					  <option value="Djibouti">Djibouti</option> 
					  <option value="Dominica">Dominica</option> 
					  <option value="Dominican Republic">Dominican Republic</option> 
					  <option value="Ecuador">Ecuador</option> 
					  <option value="Egypt">Egypt</option> 
					  <option value="El Salvador">El Salvador</option> 
					  <option value="Equatorial Guinea">Equatorial Guinea</option> 
					  <option value="Eritrea">Eritrea</option> 
					  <option value="Estonia">Estonia</option> 
					  <option value="Ethiopia">Ethiopia</option> 
					  
					  <option value="Faroe Islands">Faroe Islands</option> 
					  <option value="Fiji">Fiji</option> 
					  <option value="Finland">Finland</option> 
					  <option value="France">France</option> 
					  <option value="French Guiana">French Guiana</option> 
					  <option value="French Polynesia">French Polynesia</option> 
					  
					  <option value="Gabon">Gabon</option> 
					  <option value="Gambia">Gambia</option> 
					  <option value="Georgia">Georgia</option> 
					  <option value="Germany">Germany</option> 
					  <option value="Ghana">Ghana</option> 
					  <option value="Gibraltar">Gibraltar</option> 
					  <option value="Greece">Greece</option> 
					  <option value="Greenland">Greenland</option> 
					  <option value="Grenada">Grenada</option> 
					  <option value="Guadeloupe">Guadeloupe</option> 
					  <option value="Guam">Guam</option> 
					  <option value="Guatemala">Guatemala</option> 
					  <option value="Guinea">Guinea</option> 
					  <option value="Guinea-bissau">Guinea-bissau</option> 
					  <option value="Guyana">Guyana</option> 
					  <option value="Haiti">Haiti</option> 
					   
					  <option value="Honduras">Honduras</option> 
					  <option value="Hong Kong">Hong Kong</option> 
					  <option value="Hungary">Hungary</option> 
					  <option value="Iceland">Iceland</option> 
					  <option value="India">India</option> 
					  <option value="Indonesia">Indonesia</option> 
					  <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option> 
					  <option value="Iraq">Iraq</option> 
					  <option value="Ireland">Ireland</option> 
					  <option value="Israel">Israel</option> 
					  <option value="Italy">Italy</option> 
					  <option value="Jamaica">Jamaica</option> 
					  <option value="Japan">Japan</option> 
					  <option value="Jordan">Jordan</option> 
					  <option value="Kazakhstan">Kazakhstan</option> 
					  <option value="Kenya">Kenya</option> 
					  <option value="Kiribati">Kiribati</option> 
					 
					  <option value="Korea, Republic of">Korea, Republic of</option> 
					  <option value="Kuwait">Kuwait</option> 
					  <option value="Kyrgyzstan">Kyrgyzstan</option> 
					  <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option> 
					  <option value="Latvia">Latvia</option> 
					  <option value="Lebanon">Lebanon</option> 
					  <option value="Lesotho">Lesotho</option> 
					  <option value="Liberia">Liberia</option> 
					  <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option> 
					  <option value="Liechtenstein">Liechtenstein</option> 
					  <option value="Lithuania">Lithuania</option> 
					  <option value="Luxembourg">Luxembourg</option> 
					  <option value="Macao">Macao</option> 
					   
					  <option value="Madagascar">Madagascar</option> 
					  <option value="Malawi">Malawi</option> 
					  <option value="Malaysia">Malaysia</option> 
					  <option value="Maldives">Maldives</option> 
					  <option value="Mali">Mali</option> 
					  <option value="Malta">Malta</option> 
					  <option value="Marshall Islands">Marshall Islands</option> 
					  <option value="Martinique">Martinique</option> 
					  <option value="Mauritania">Mauritania</option> 
					  <option value="Mauritius">Mauritius</option> 
					  <option value="Mayotte">Mayotte</option> 
					  <option value="Mexico">Mexico</option> 
					
					  <option value="Moldova, Republic of">Moldova, Republic of</option> 
					  <option value="Monaco">Monaco</option> 
					  <option value="Mongolia">Mongolia</option> 
					  <option value="Montenegro">Montenegro</option>
					  <option value="Montserrat">Montserrat</option> 
					  <option value="Morocco">Morocco</option> 
					  <option value="Mozambique">Mozambique</option> 
					  <option value="Myanmar">Myanmar</option> 
					  <option value="Namibia">Namibia</option> 
					  <option value="Nauru">Nauru</option> 
					  <option value="Nepal">Nepal</option> 
					  <option value="Netherlands">Netherlands</option> 
					  <option value="Netherlands Antilles">Netherlands Antilles</option> 
					  <option value="New Caledonia">New Caledonia</option> 
					  <option value="New Zealand">New Zealand</option> 
					  <option value="Nicaragua">Nicaragua</option> 
					  <option value="Niger">Niger</option> 
					  <option value="Nigeria">Nigeria</option> 
					  <option value="Niue">Niue</option> 
					  <option value="Norfolk Island">Norfolk Island</option> 
					  <option value="Northern Mariana Islands">Northern Mariana Islands</option> 
					  <option value="Norway">Norway</option> 
					  <option value="Oman">Oman</option> 
					  <option value="Pakistan">Pakistan</option> 
					  <option value="Palau">Palau</option> 
					   
					  <option value="Panama">Panama</option> 
					  <option value="Papua New Guinea">Papua New Guinea</option> 
					  <option value="Paraguay">Paraguay</option> 
					  <option value="Peru">Peru</option> 
					  <option value="Philippines">Philippines</option> 
					  <option value="Pitcairn">Pitcairn</option> 
					  <option value="Poland">Poland</option> 
					  <option value="Portugal">Portugal</option> 
					  <option value="Puerto Rico">Puerto Rico</option> 
					  <option value="Qatar">Qatar</option> 
					  <option value="Reunion">Reunion</option> 
					  <option value="Romania">Romania</option> 
					  <option value="Russian Federation">Russian Federation</option> 
					  <option value="Rwanda">Rwanda</option> 
					  <option value="Saint Helena">Saint Helena</option> 
					  <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option> 
					  <option value="Saint Lucia">Saint Lucia</option> 
					  <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option> 
					
					  <option value="Samoa">Samoa</option> 
					  <option value="San Marino">San Marino</option> 
					  <option value="Sao Tome and Principe">Sao Tome and Principe</option> 
					  <option value="Saudi Arabia">Saudi Arabia</option> 
					  <option value="Senegal">Senegal</option> 
					  <option value="Serbia">Serbia</option> 
					  <option value="Seychelles">Seychelles</option> 
					  <option value="Sierra Leone">Sierra Leone</option> 
					  <option value="Singapore">Singapore</option> 
					  <option value="Slovakia">Slovakia</option> 
					  <option value="Slovenia">Slovenia</option> 
					  <option value="Solomon Islands">Solomon Islands</option> 
					  <option value="Somalia">Somalia</option> 
					  <option value="South Africa">South Africa</option> 
					 
					  <option value="South Sudan">South Sudan</option> 
					  <option value="Spain">Spain</option> 
					  <option value="Sri Lanka">Sri Lanka</option> 
					  <option value="Sudan">Sudan</option> 
					  <option value="Suriname">Suriname</option> 
					  <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option> 
					  <option value="Swaziland">Swaziland</option> 
					  <option value="Sweden">Sweden</option> 
					  <option value="Switzerland">Switzerland</option> 
					  <option value="Syrian Arab Republic">Syrian Arab Republic</option> 
					  <option value="Taiwan, Republic of China">Taiwan, Republic of China</option> 
					  <option value="Tajikistan">Tajikistan</option> 
					  <option value="Tanzania, United Republic of">Tanzania, United Republic of</option> 
					  <option value="Thailand">Thailand</option> 
					  <option value="Timor-leste">Timor-leste</option> 
					  <option value="Togo">Togo</option> 
					  <option value="Tokelau">Tokelau</option> 
					  <option value="Tonga">Tonga</option> 
					  <option value="Trinidad and Tobago">Trinidad and Tobago</option> 
					  <option value="Tunisia">Tunisia</option> 
					  <option value="Turkey">Turkey</option> 
					  <option value="Turkmenistan">Turkmenistan</option> 
					  <option value="Turks and Caicos Islands">Turks and Caicos Islands</option> 
					  <option value="Tuvalu">Tuvalu</option> 
					  <option value="Uganda">Uganda</option> 
					  <option value="Ukraine">Ukraine</option> 
					  <option value="United Arab Emirates">United Arab Emirates</option> 
					  <option value="United Kingdom">United Kingdom</option> 
					  <option value="United States">United States</option> 
					
					  <option value="Uruguay">Uruguay</option> 
					  <option value="Uzbekistan">Uzbekistan</option> 
					  <option value="Vanuatu">Vanuatu</option> 
					  <option value="Venezuela">Venezuela</option> 
					  <option value="Viet Nam">Viet Nam</option> 
					  <option value="Virgin Islands, British">Virgin Islands, British</option> 
					  <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option> 
					  <option value="Wallis and Futuna">Wallis and Futuna</option> 
					  <option value="Western Sahara">Western Sahara</option> 
					  <option value="Yemen">Yemen</option> 
					  <option value="Zambia">Zambia</option> 
					  <option value="Zimbabwe">Zimbabwe</option>
					</select></td>
	  			</tr>
					
				</tr>
				<tr>
					<td class="ship"><h3>Contact Name</h3></td>
					<td><input type="text" name="cname" placeholder="Name with intials" size="35" required></td>
				</tr>
				<tr>
					<td class="ship"><h3>Address</h3></td>
					<td><textarea name="address" cols="28" rows="6"></textarea></td>
				</tr>
				<tr>
					<td class="ship"><h3>Phone Number</h3></td>
					<td><input type="text" name="phone" placeholder="phone number" size="35" required></td>
				</tr>
				<tr>
					<td colspan="1">
						<input type="submit" value="Ship to this address" class="shipbut"  name="submit">
						
					</td>
				</tr>
			</table>
		</form>

</div>
	</body>
</html>