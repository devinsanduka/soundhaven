<html>
	<head>
		 <style>
		 	#panel,#flip
{
padding:5px;
cursor: pointer;
text-align:center;

background-color:red;

}

#flip{
	width:5px;
}
#panel
{
	width:500px;
	cursor: pointer;
	
padding:50px;
display:none;
}
#album{
		margin-left:50px;
	}
		 </style>
		<title>Shopping Cart</title>
		<link type="text/css" rel="stylesheet" href="cart.css" />
		<script src="jquery-1.11.1.min.js"></script>
	</head>
	<body>
	<script> 
$(document).ready(function(){
  $("#flip").click(function(){
    $("#panel").slideToggle(500);
 
  });
});
</script>

	
		<h1 class="header"><center>Shopping Cart</center></h1>
		
	</body>
</html>

<?php
    echo "<center><table style='1px solid black'>";
	
			echo "<tr>";
			echo "<th></th>";
            echo "<th class='textAlignLeft' style='width:40%;background-color:#D0D0D0'>Album Name</th>";
            echo "<th style='width:15% ;background-color:#D0D0D0'>No of Tracks </th>";
            echo "<th style='width:15% ;background-color:#D0D0D0'>Size Mb: </th>";
			echo "<th style='width:10% ;background-color:#D0D0D0'>Duration</th>";
			echo "<th style='width:10% ;background-color:#D0D0D0'>Price</th>";
			echo "<th style='width:10%'></th>";
        	echo "</tr>";
	
				echo"<tr>";
				echo "<th style='width:5%'><input type='checkbox' name='chkbox'></th>";
				echo "<td class='textAlignLeft' style='background-color:#606060;color:#D0D0D0;'>";
				
				echo "<div id='album'>The Beatles \ Meet The Beatles (The U.S. Album)</div>";
				echo"<div id='panel' colspan='2' >Hello world!</div>";
				echo"<div id='flip'><img src='uparrow.gif' width='10' height='10'/></div></td>";
				echo"</td>";
                echo "<td style='background-color:#606060 ;color:#D0D0D0;'>24/24</td>";
				echo "<td style='background-color:#606060;color:#D0D0D0;'>126.07</td>";
				echo "<td style='background-color:#606060;color:#D0D0D0;'>54:27</td>";
				echo "<td style='background-color:#606060;color:#D0D0D0;'>$23.5</td>";
				echo "<td style='border:0px'><a href='' class='customButton'>Buy</a></td>";
               	echo "</tr><center>";
               	
				echo"<tr>";
				echo "<th style='width:5%'><input type='checkbox' name='chkbox'></th>";
				echo "<td class='textAlignLeft'style='background-color:#606060;color:#D0D0D0;'>";
				echo"<a href=''>";
				echo"<img src='uparrow.gif' width='10' height='12'/></a>";
				echo "The Beatles \ The Early Beatles (The U.S. Album)</td>";
				echo"</td>";
                echo "<td style='background-color:#606060;color:#D0D0D0;'>22/22</td>";
				echo "<td style='background-color:#606060;color:#D0D0D0;'>124.07</td>";
				echo "<td style='background-color:#606060;color:#D0D0D0;'>47:27</td>";
				echo "<td style='background-color:#606060;color:#D0D0D0;'>$23.5</td>";
				echo "<td style='border:0px'><a href='' class='customButton'>Buy</a></td>";
               	echo "</tr><center>";
               	
				echo"<tr>";
				echo "<th style='width:5%'><input type='checkbox' name='chkbox'></th>";
				echo "<td class='textAlignLeft' style='background-color:#606060;color:#D0D0D0;'>";
				echo"<a href=''>";
				echo"<img src='uparrow.gif' width='10' height='12'/></a>";
				echo "The Beatles \ Meet The Beatles (The U.S. Album)</td>";
				echo"</td>";
                echo "<td style='background-color:#606060 ;color:#D0D0D0;'>24/24</td>";
				echo "<td style='background-color:#606060;color:#D0D0D0;'>126.07</td>";
				echo "<td style='background-color:#606060;color:#D0D0D0;'>54:27</td>";
				echo "<td style='background-color:#606060;color:#D0D0D0;'>$23.5</td>";
				echo "<td style='border:0px'><a href='' class='customButton'>Buy</a></td>";
               	echo "</tr><center>";
               	
				echo"<tr>";
				echo "<th style='width:5%'><input type='checkbox' name='chkbox'></th>";
				echo "<td class='textAlignLeft' style='background-color:#606060;color:#D0D0D0;'>";
				echo"<a href=''>";
				echo"<img src='uparrow.gif' width='10' height='12'/></a>";
				echo "The Beatles \ Meet The Beatles (The U.S. Album)</td>";
				echo"</td>";
                echo "<td style='background-color:#606060 ;color:#D0D0D0;'>24/24</td>";
				echo "<td style='background-color:#606060;color:#D0D0D0;'>126.07</td>";
				echo "<td style='background-color:#606060;color:#D0D0D0;'>54:27</td>";
				echo "<td style='background-color:#606060;color:#D0D0D0;'>$23.5</td>";
				echo "<td style='border:0px'><a href='' class='customButton'>Buy</a></td>";
               	echo "</tr><center>";
               	
				echo"<tr>";
				echo "<th style='width:5%'><input type='checkbox' name='chkbox'></th>";
				echo "<td class='textAlignLeft' style='background-color:#606060;color:#D0D0D0;'>";
				echo"<a href=''>";
				echo"<img src='uparrow.gif' width='10' height='12'/></a>";
				echo "The Beatles \ Meet The Beatles (The U.S. Album)</td>";
				echo"</td>";
                echo "<td style='background-color:#606060 ;color:#D0D0D0;'>24/24</td>";
				echo "<td style='background-color:#606060;color:#D0D0D0;'>126.07</td>";
				echo "<td style='background-color:#606060;color:#D0D0D0;'>54:27</td>";
				echo "<td style='background-color:#606060;color:#D0D0D0;'>$23.5</td>";
				echo "<td style='border:0px'><a href='' class='customButton'>Buy</a></td>";
               	echo "</tr><center>";
               	
				echo"<tr>";
				echo "<th style='width:5%'><input type='checkbox' name='chkbox'></th>";
				echo "<td class='textAlignLeft' style='background-color:#606060;color:#D0D0D0;'>";
				echo"<a href=''>";
				echo"<img src='uparrow.gif' width='10' height='12'/></a>";
				echo "The Beatles \ Meet The Beatles (The U.S. Album)</td>";
				echo"</td>";
                echo "<td style='background-color:#606060 ;color:#D0D0D0;'>24/24</td>";
				echo "<td style='background-color:#606060;color:#D0D0D0;'>126.07</td>";
				echo "<td style='background-color:#606060;color:#D0D0D0;'>54:27</td>";
				echo "<td style='background-color:#606060;color:#D0D0D0;'>$23.5</td>";
				echo "<td style='border:0px'><a href='' class='customButton'>Buy</a></td>";
               	echo "</tr><center>";
               	
				echo"<tr>";
				echo "<th style='width:5%'><input type='checkbox' name='chkbox'></th>";
				echo "<td class='textAlignLeft' style='background-color:#606060;color:#D0D0D0;'>";
				echo"<a href=''>";
				echo"<img src='uparrow.gif' width='10' height='12'/></a>";
				echo "The Beatles \ Meet The Beatles (The U.S. Album)</td>";
				echo"</td>";
                echo "<td style='background-color:#606060 ;color:#D0D0D0;'>24/24</td>";
				echo "<td style='background-color:#606060;color:#D0D0D0;'>126.07</td>";
				echo "<td style='background-color:#606060;color:#D0D0D0;'>54:27</td>";
				echo "<td style='background-color:#606060;color:#D0D0D0;'>$23.5</td>";
				echo "<td style='border:0px'><a href='' class='customButton'>Buy</a></td>";
               	echo "</tr><center>";
               	
				echo"<tr>";
				echo "<th style='width:5%'><input type='checkbox' name='chkbox'></th>";
				echo "<td class='textAlignLeft' style='background-color:#606060;color:#D0D0D0;'>";
				echo"<a href=''>";
				echo"<img src='uparrow.gif' width='10' height='12'/></a>";
				echo "The Beatles \ Meet The Beatles (The U.S. Album)</td>";
				echo"</td>";
                echo "<td style='background-color:#606060 ;color:#D0D0D0;'>24/24</td>";
				echo "<td style='background-color:#606060;color:#D0D0D0;'>126.07</td>";
				echo "<td style='background-color:#606060;color:#D0D0D0;'>54:27</td>";
				echo "<td style='background-color:#606060;color:#D0D0D0;'>$23.5</td>";
				echo "<td style='border:0px'><a href='' class='customButton'>Buy</a></td>";
               	echo "</tr><center>";
               	
				echo"<tr>";
				echo "<th style='width:5%'><input type='checkbox' name='chkbox'></th>";
				echo "<td class='textAlignLeft' style='background-color:#606060;color:#D0D0D0;'>";
				echo"<a href=''>";
				echo"<img src='uparrow.gif' width='10' height='12'/></a>";
				echo "The Beatles \ Meet The Beatles (The U.S. Album)</td>";
				echo"</td>";
                echo "<td style='background-color:#606060 ;color:#D0D0D0;'>24/24</td>";
				echo "<td style='background-color:#606060;color:#D0D0D0;'>126.07</td>";
				echo "<td style='background-color:#606060;color:#D0D0D0;'>54:27</td>";
				echo "<td style='background-color:#606060;color:#D0D0D0;'>$23.5</td>";
				echo "<td style='border:0px'><a href='' class='customButton'>Buy</a></td>";
               	echo "</tr><center>";
               	
				echo"<tr>";
				echo "<th style='width:5%'><input type='checkbox' name='chkbox'></th>";
				echo "<td class='textAlignLeft' style='background-color:#606060;color:#D0D0D0;'>";
				echo"<a href=''>";
				echo"<img src='uparrow.gif' width='10' height='12'/></a>";
				echo "The Beatles \ Meet The Beatles (The U.S. Album)</td>";
				echo"</td>";
                echo "<td style='background-color:#606060 ;color:#D0D0D0;'>24/24</td>";
				echo "<td style='background-color:#606060;color:#D0D0D0;'>126.07</td>";
				echo "<td style='background-color:#606060;color:#D0D0D0;'>54:27</td>";
				echo "<td style='background-color:#606060;color:#D0D0D0;'>$23.5</td>";
				echo "<td style='border:0px'><a href='' class='customButton'>Buy</a></td>";
               	echo "</tr><center>";
               	
				echo"<tr>";
				echo "<th style='width:5%'><input type='checkbox' name='chkbox'></th>";
				echo "<td class='textAlignLeft' style='background-color:#606060;color:#D0D0D0;'>";
				echo"<a href=''>";
				echo"<img src='uparrow.gif' width='10' height='12'/></a>";
				echo "The Beatles \ Meet The Beatles (The U.S. Album)</td>";
				echo"</td>";
                echo "<td style='background-color:#606060 ;color:#D0D0D0;'>24/24</td>";
				echo "<td style='background-color:#606060;color:#D0D0D0;'>126.07</td>";
				echo "<td style='background-color:#606060;color:#D0D0D0;'>54:27</td>";
				echo "<td style='background-color:#606060;color:#D0D0D0;'>$23.5</td>";
				echo "<td style='border:0px'><a href='' class='customButton'>Buy</a></td>";
               	echo "</tr><center>";
               	
				echo"<tr>";
				echo "<th style='width:5%'><input type='checkbox' name='chkbox'></th>";
				echo "<td class='textAlignLeft' style='background-color:#606060;color:#D0D0D0;'>";
				echo"<a href=''>";
				echo"<img src='uparrow.gif' width='10' height='12'/></a>";
				echo "The Beatles \ Meet The Beatles (The U.S. Album)</td>";
				echo"</td>";
                echo "<td style='background-color:#606060 ;color:#D0D0D0;'>24/24</td>";
				echo "<td style='background-color:#606060;color:#D0D0D0;'>126.07</td>";
				echo "<td style='background-color:#606060;color:#D0D0D0;'>54:27</td>";
				echo "<td style='background-color:#606060;color:#D0D0D0;'>$23.5</td>";
				echo "<td style='border:0px'><a href='' class='customButton'>Buy</a></td>";
               	echo "</tr><center>";
               	
				echo"<tr>";
				echo "<th></th>";
				echo"<td style='border:0px'><a href='' class='customButton'>Remove Selected Album</a></td>";
				echo"<td style='border:0px'><a href='' class='customButton'>Remove Everything</a></td>";
				echo"</tr>"
               	
				
?>
