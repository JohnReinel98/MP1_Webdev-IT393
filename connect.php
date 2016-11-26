<?php
	@mysql_connect("localhost", "root", "")or die("cannot connect to server"); 
	mysql_select_db("dbmplogistics")or die("cannot select DB");
?>