<?php
   mysql_connect("localhost","root","");
   mysql_select_db("soundhaven");
   if(mysql_error())
   {
   	echo "Unable to Connect to the Database ".mysql_errno();
   }
?>