<?php
	include "connect.php";
	$fu = new func_sql;
	
	session_start();
	if (isset($_POST['send']))
	{
		$name = ($_POST['name']);
		$email = ($_POST['email']);
		$subject = ($_POST['subject']);
		$message = ($_POST['message']);
		
			if($sql=$fu -> con()-> query("INSERT INTO send VALUES('$name','$email','$subject','$message')")){
				echo "<script type='text/javascript'>alert('Terkirim'); document.location ='index.html';</script>";
			}
			else
			{
				echo "<script type='text/javascript'>alert('Terjadi Error');</script>";
			}
	}
?>