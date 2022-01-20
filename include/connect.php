<?php
	$link = mysqli_connect("localhost","root","", "company") or die("Cannot connect to the localhost");
	mysqli_select_db('dienthoai', $link) or die("Cannot connect to the database");
	mysqli_set_charset('UTF-8', $link);
	
?>
