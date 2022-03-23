<?php
	  	$nameErr = $emailErr = $confirmPasswordrErr = $passwordErr = $fillerr=$emailErr2="";
		$name = $email = $gender = $confirmPassword = $password =$address="";
	  	
		

		
		
		
	  		if($_SERVER["REQUEST_METHOD"] == "POST")
	{
				if(( !empty($_POST["user_fname"])) || (!empty($_POST["user_lname"])) )
				{
					$fname=$_POST["user_fname"];
					$lname=$_POST["user_lname"];
						
						if (   (!preg_match("/^[a-zA-Z]*$/",$fname))  || (!preg_match("/^[a-zA-Z]*$/",$lname)) ) 
							{
  							$nameErr = " * Only letters allowed"; 
							}
						else {
							$fname=$_POST["user_fname"];
							
						}
					
				
				}
					
							if(  (!empty($_POST["user_password"]))  ||(!empty($_POST["confirm_cpassword"])) )
							{
								$password=$_POST["user_password"];
								$confirmPassword=$_POST["confirm_cpassword"];
								
									if($password!=$confirmPassword)
									{
										$confirmPasswordrErr="   *password doesn't match";
									}
									else
									{
										$password=$_POST["user_password"];
										$password=$_POST["confirm_cpassword"];
									}
									
							}
							
				
				if(!empty($_POST["user_email"]))
				{
					$email=$_POST["user_email"];
					
					if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
					{
  						$emailErr = " * Invalid email format"; 
					}
					else
					{
						$connection=mysqli_connect("localhost", "root", "", "soundhaven");
						$mailquery="select * from customer where email='$email'";
						$x=mysqli_query($connection, $mailquery);
						
						
							
						
						if(mysqli_num_rows($x)>0)
						{
							$emailErr2="*Email already exists. Please enter a new email.";
						}
						else
						{
							$email=$_POST["user_email"];
						}
						
						
						
					}
				}
			
			if( (!empty($_POST["user_gender"])) && (!empty($_POST["user_address"])) && (!empty($_POST["user_country"]))   && (!empty($_POST["user_number"])))
			{
					$addres=$_POST["user_address"];
				
					$gender=$_POST["user_gender"];
					$state=$_POST["user_state"];
					$country=$_POST["user_country"];
					$mobile=$_POST["user_number"];
				
				
				
			}
			else 
			{
			 $fillerr="please fill the form";	
			}
	
			if( (empty($nameErr)) && (empty($emailErr)) && (empty($confirmPasswordrErr)) && (empty($fillerr)) && (empty($emailErr2))  ) 
			{
				$connection=mysqli_connect("localhost", "root", "", "soundhaven");
				$myquery=" INSERT INTO customer(fname,lname,email,gender,address1,password,state,country,mobile) VALUES ('$fname','$lname','$email','$gender','$addres','$password','$state','$country','$mobile' )";
				$result=mysqli_query($connection, $myquery);
				if($result)
				{
					header("Location:user_login_session.php");
					exit;
				}
				else 
				{
					die("that didn't happen ".mysqli_error($connection));	
				}
				
				mysqli_close($connection);
			}
	
		
	}
	
	  	
	  	
	  	?>
	  	
<!DOCTYPE html>
<html>
	<head>
		
		<link rel="stylesheet" href="reg_style.css">
		<link rel="stylesheet" href="normalize.css" />
		<!--<link rel="stylesheet" href="normalize.css" />-->
		<style>
			a.a1
			{
				text-decoration: none;
				color: white;
				line-height: 100px;
				margin-bottom: 100px;
				margin-right: 130px;
				margin-left: 30px;
			}
			
			
			div.header2
			{
				height: 50px;
				background-color: black;
				position: fixed;
				z-index: 1000;
			}
			
			a.a2
			{
				text-decoration: none;
				color: #549695;
			}
			
			a.a2:hover
			{
				color: #376261;
			}
			
			
			
			
			
			
			form.search {
				position:relative;
				
				
			}
			
			form.search * {
				background: transparent;
		
			}
			form.s_text
			{
				-webkit-appearance: none;
				-moz-appearance: none;
				border: none;
				-webkit-border-radius: 0;
				-moz-border-radius: 0;
				padding:0;
				margin:0;
				
				
			}
			form.search
			{
				position:relative;
				width:200px;
				height:30px;
				
				border:1px solid #AAA;
				
				background: url(magnifyingglass.png) no-repeat #ddd;
				background: url(magnifyingglass.png) no-repeat, -webkit-linear-gradient(#fff,#ddd);
				background: url(magnifyingglass.png) no-repeat, -moz-linear-gradient(#fff,#ddd);
				
				-webkit-border-radius:40px;
				-moz-border-radius:40px;
				border-radius:40px 40px 40px 40px;
				
				-webkit-box-shadow: inset 0px 2px 5px rgba(0,0,0,.4),1px 1px 5px #DDD;
				-moz-box-shadow: inset 0px 2px 5px rgba(0,0,0,.4),1px 1px 5px #DDD;
				box-shadow: inset 0px 2px 5px rgba(0,0,0,.4),1px 1px 5px #DDD;
					}
			form.s_button{
				position: absolute;
				right: 65px;
				height: 30px;
				width: 50px;
				border: none;
				
				background:red;
				background:-webkit-linear-gradient(#172C3D,#2A496B 50%,#182430 51%,#000);
				background:-moz-linear-gradient(#172C3D,#2A496B 50%,#182430 51%,#000);
				
				-webkit-border-radius:0 40px 40px 0;
				-moz-border-radius:0 40px 40px 0;
				border-radius:0 40px 40px 0;
				
				-webkit-box-shadow: inset 1px 0 0px rgba(255,255,255,.4);
				-moz-box-shadow: inset 1px 0 0px rgba(255,255,255,.4);
				box-shadow: inset 1px 0 0px rgba(255,255,255,.4);
			
				border-left:1px solid rgba(0,0,0,.2);
				color: #FFF;
					}
		form.s_button :hover{
			background:-webkit-linear-gradient(#4E080D,#9C111A 50%,#4E080D 51%);
			background:-moz-linear-gradient(#4E080D,#9C111A 50%,#4E080D 51%);
				
			
					}
		
	form.s_text
		{
			position: absolute;
			left: 30px;
			float: right;
			width: 110px;
			height: 30px;
			color: #C0C0C0;
			outline: solid transparent;
					}
			
			
                .share-icon {
                	display: inline-block;
                    float: left;
                    margin: 4px;
                    width: 32px;
                    height: 32px;
                    cursor: pointer;
                    vertical-align: middle;
                    background-image: url(Resources/main_slider/share/share-icons.png);
                	}

                .share-facebook {
                    background-position: 0px 0px;
                	}

                    .share-facebook:hover {
                        background-position: 0px -40px;
                	}

        .share-twitter {
            background-position: -40px 0px;
        			}

            .share-twitter:hover {
                background-position: -40px -40px;
            		}

        .share-pinterest {
            background-position: -80px 0px;
        			}

            .share-pinterest:hover {
                background-position: -80px -40px;
           			}


                .share-googleplus {
                    background-position: -120px 0px;
                	}

                    .share-googleplus:hover {
                        background-position: -120px -40px;
                    }


                .share-email {
                    background-position: -320px 0px;
                	}

                    .share-email:hover {
                        background-position: -320px -40px;
                    }
            </style>

     		
	</head>
	<body style="background: url('Resources/common/blackorchid_@2X.jpg')">
	<div class="header2" style="position: fixed; width: 100%; background: transparent; margin-top: 10px;">	
				<table width="98.5%">
					<tr align="center">
						<td width="10%"><a href="../index.php"><img src="Resources/common/home.jpg" onmouseover="this.src='Resources/common/home_over.jpg'" onmouseout="this.src='Resources/common/home.jpg'"></a></td>
						<td width="10%"><a href="../music_library.php"><img src="Resources/common/browse.jpg" onmouseover="this.src='Resources/common/browse_over.jpg'" onmouseout="this.src='Resources/common/browse.jpg'"></a></td>
						<td width="10%"><a href="../charts.html"><img src="Resources/common/charts.jpg" onmouseover="this.src='Resources/common/charts_over.jpg'" onmouseout="this.src='Resources/common/charts.jpg'"></a></td>		
						<td width="10%"><a href="../cart/content.php"><img src="Resources/common/mycart.jpg" onmouseover="this.src='Resources/common/mycart_over.jpg'" onmouseout="this.src='Resources/common/mycart.jpg'"></a></td>
						<td width="10%"><a href="user_login/user_login_session.php"><img src="Resources/common/myaccount.jpg" onmouseover="this.src='Resources/common/myaccount_over.jpg'" onmouseout="this.src='Resources/common/myaccount.jpg'"></a></td>
						<td width="10%"><a href="user_login/user_login_session.php"><img src="Resources/common/signin.jpg" onmouseover="this.src='Resources/common/signin_over.jpg'" onmouseout="this.src='Resources/common/signin.jpg'"></a></td>
						
				<div>	
                <td width="1%"><a class="share-icon share-facebook" target="_blank" href="http://www.facebook.com/sharer.php?u=http://jssor.com" title="Share on Facebook"></a> </td>
                <td width="1%"><a class="share-icon share-twitter" target="_blank" href="http://twitter.com/share?url=http://jssor.com&text=jQuery%20Image%20Slider/Slideshow/Carousel/Gallery/Banner%20javascript+html%20TOUCH%20SWIPE%20Responsive" title="Share on Twitter"></a></td>
                <td width="1%"><a class="share-icon share-googleplus" target="_blank" href="https://plus.google.com/share?url=http://jssor.com" title="Share on Google Plus"></a></td>
                <td width="1%"><a class="share-icon share-pinterest" target="_blank" href="http://pinterest.com/pin/create/button/?url=http://jssor.com&media=http://jssor.com/img/site/jssor.slider.jpg&description=jQuery%20Image%20Slider/Slideshow/Carousel/Gallery/Banner%20javascript+html%20TOUCH%20SWIPE%20Responsive" title="Share on Pinterst"></a></td>
                <td width="1%"><a class="share-icon share-email" target="_blank" href="mailto:?Subject=Jssor%20Slider&Body=Highly%20recommended%20jQuery%20Image%20Slider/Slideshow/Carousel/Gallery/Banner%20javascript+html%20TOUCH%20SWIPE%20Responsive%20http://jssor.com" title="Share by Email"></a>
            </td>
            <td><div style="position: absolute; right: 100px; top: 7px;"><form id="sea" method="get" action="vish.php"><input name="search" type="search" size="20"/><input type="submit" value="go" /></form></div></td>
					</tr>
				</table>				
	</div>
	</br>
	</br>
	</br>
<!-- navigation -->	
	  	
	  	
	  	
	  	
	  	
	  	
	  	<div class="content">
				<h1 style>" IF MUSIC BE THE FOOD OF LOVE, PLAY ON "</h1>
								<h1>-William Shakespeare </h1> 
				
			</div>
			
	  	
	  	
	  	
	  	
	  	
	  		<form  class="reg" name="reg"   method="post"   action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>">
	  			<h1 style="color: white">Sign up</h1>
	  			
	  			<table  height="500px">
	  			<tr><td> <Span style="color: white">Name</span> <span class="error"><?php echo $nameErr; ?></span> </td></tr> 
	  			<tr>
	  				
	  				<td><input id="text3" type="text" name="user_fname" size="30"  placeholder="First Name" required /></td>
	  			</tr>
	  			<tr>	
	  				<td><input id="text3" type="text" name="user_lname" size="30" placeholder="Last Name" required/> </td>
	  			</tr>
	  			<tr><td><Span style="color: white">Email</span> <span class="error"><?php echo $emailErr; echo $emailErr2; ?></span> </td></tr>
	  			<tr>
	  				<td><input id="text3" type="email" name="user_email" size="30"  placeholder="email"/><br></td>
	  			</tr>
	  			
	  			<tr><td><Span style="color: white">Gender</span>
	  				<input type="radio" name="user_gender" value="male" required/>Male 
	  				<input type="radio" name="user_gender" value="female" />Female</td>
	  			</tr>
	  			
	  			
	  			
	  			<tr><td><Span style="color: white">Create Password</span></td></tr>
	  			<tr>
	  				<td><input id="text3" type="password" name="user_password" size="30"  placeholder="should only contain letters and numbers (8)" pattern="[a-zA-Z0-9]{8}" required /><br></td>
	  			</tr>
	  			<tr><td><Span style="color: white">Confirm Password </span><span class="error"><?php echo $confirmPasswordrErr; ?></td></tr>
	  			<tr>
	  				<td><input id="text3" type="password" name="confirm_cpassword" size="30"  placeholder="confirm password" required/><br></td>
	  				
	  			</tr>
	  			
	  			
	  			<tr><td><Span style="color: white">Address</span></td></tr>
	  			<tr>
	  				<td><textarea id="text3" name="user_address" rows="3" cols="32" required></textarea></td>
	  			</tr>
	  			
	  			
	  			<tr><td><Span style="color: white">State</span></td></tr>
	  			<tr>
	  				<td><input id="text3" type="text" name="user_state" size="30"  placeholder="State" required/><br></td>
	  			</tr>
	  		
	  			<tr><td><Span style="color: white">Country</span></td></tr>
	  			<tr>
	  				<td><select id="text4"  name="user_country" required>
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
	  			
	  			
	  			
	  			<tr><td><Span style="color: white">mobile number</span></td></tr>
	  			<tr>
	  				<td><input id="text3" type="text" name="user_number" size="30"  placeholder="xx-xxxxxx" pattern="[0-9]{10}" required/><br></td>
	  			</tr>
	  			
	  			<br>
	  			<br>
	  			<tr><td><input class="button" type="submit" name="submit_user" size="30" value="submit"/><br><br></td></tr>
	  			
	  			
	  			
	  			
	  			</table>
	  			
	  			
	  			
	  		</form>
	  		
	  		
	  			<div style="margin-top: 1100px;">
	  			<!-- footer -->
	
		
	<hr style="border-color: #4fccc6">
	<footer>
		<table style="background: transparent;">
			<tr width="100%">
				<td style="margin-left: 30px; margin-right: 20px; padding-left: 40px; padding-right: 40px;"><p style="color: #9eaa3c;"><b>About Us</b></p></td>
				<td style="margin-left: 30px; margin-right: 30px; padding-left: 250px; padding-right: 250px;"><p style="color: #9eaa3c"><b>Forum</b></p></td>
				<td style="margin-right: 20px; margin-left: 30px; padding-left: 40px; padding-right: 40px;"><p style="color: #9eaa3c"><b>Help</b></p></td>
			</tr>
			<tr width="100%">
				<td style="margin-left: 30px; margin-right: 20px; padding-left: 40px; padding-right: 40px;">
					<a class="a2" href="../static_pages/aboutus.html">About SoundHaven</a><br>
					<a class="a2" href="../static_pages/termsofuse.html">Terms of Use</a><br>
					<a class="a2" href="../static_pages/privacypolicy.html">Privacy Policy</a>
				</td>
				<td style="margin-left: 30px; margin-right: 30px; padding-left: 250px; padding-right: 250px;">				
					<a class="a2" href="../comments/comments.php">Message Board</a>
					<br>
					<a class="a2"href="https://www.facebook.com/soundhavensrilanka">SoundHaven on Facebook</a>
					<br>
					<a class="a2"href="https://twitter.com/SoundHavenSL">SoundHaven on Twitter</a>
				</td>
				<td style="margin-right: 20px; margin-left: 30px; padding-left: 40px; padding-right: 40px;">				
					<a class="a2" href="../static_pages/contactus.html">Contact Us</a>
					<br>
					<a class="a2" href="../static_pages/FAQ.html">FAQ</a>
				</td>
			</tr>
		</table>
		</footer>
		</div>
		<br>
	</body>
</html>